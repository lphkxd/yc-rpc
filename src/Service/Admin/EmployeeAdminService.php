<?php

declare(strict_types=1);

namespace YC\RPC\Service\Admin;

use Hyperf\RpcMultiplex\Constant;
use Hyperf\RpcServer\Annotation\RpcService;
use YC\Core\Exception\ApiException;
use YC\RPC\RpcService\Admin\EmployeeAdminServiceInterface;
use YC\Open\Service\Admin\EmployeeAdminService as OpenEmployeeAdminService;
use YC\Corp\Service\CorpEmployeeService;
use Hyperf\Di\Annotation\Inject;

#[RpcService(name: EmployeeAdminServiceInterface::class, server: "rpc", protocol: Constant::PROTOCOL_DEFAULT)]
class EmployeeAdminService implements EmployeeAdminServiceInterface
{
    #[Inject]
    protected OpenEmployeeAdminService $employeeAdminService;
    
    #[Inject]
    protected CorpEmployeeService $corpEmployeeService;

    /**
     * 创建员工
     * @param int $corpId
     * @param array $data
     * @return array
     */
    public function create(int $corpId, array $data): array
    {
        // 设置企业ID
        $data['corp_id'] = $corpId;
        return $this->employeeAdminService->create($data);
    }
    
    /**
     * 更新员工信息
     * @param int $corpId
     * @param int $employeeId
     * @param array $data
     * @return array
     */
    public function update(int $corpId, int $employeeId, array $data): array
    {
        // 确保员工属于指定企业
        $this->verifyEmployeeBelongsToCorp($corpId, $employeeId);
        return $this->employeeAdminService->update($employeeId, $data);
    }
    
    /**
     * 禁用员工
     * @param int $corpId
     * @param int $employeeId
     * @return array
     */
    public function disable(int $corpId, int $employeeId): array
    {
        // 确保员工属于指定企业
        $this->verifyEmployeeBelongsToCorp($corpId, $employeeId);
        return $this->employeeAdminService->disable($employeeId);
    }
    
    /**
     * 启用员工
     * @param int $corpId
     * @param int $employeeId
     * @return array
     */
    public function enable(int $corpId, int $employeeId): array
    {
        // 确保员工属于指定企业
        $this->verifyEmployeeBelongsToCorp($corpId, $employeeId);
        return $this->employeeAdminService->activate($employeeId);
    }
    
    /**
     * 获取员工详情
     * @param int $corpId
     * @param int $employeeId
     * @return array
     */
    public function info(int $corpId, int $employeeId): array
    {
        // 确保员工属于指定企业
        $this->verifyEmployeeBelongsToCorp($corpId, $employeeId);
        return $this->employeeAdminService->info($employeeId);
    }
    
    /**
     * 获取企业下的员工列表
     * @param int $corpId
     * @param array $filter
     * @return array
     */
    public function list(int $corpId, array $filter = []): array
    {
        $filter['corp_id'] = $corpId;
        return $this->employeeAdminService->byCorp($corpId, $filter);
    }
    
    /**
     * 员工离职处理
     * @param int $corpId
     * @param int $employeeId
     * @param string $reason
     * @return array
     */
    public function resign(int $corpId, int $employeeId, string $reason = ''): array
    {
        // 确保员工属于指定企业
        $this->verifyEmployeeBelongsToCorp($corpId, $employeeId);
        return $this->employeeAdminService->resign($employeeId, $reason);
    }
    
    /**
     * 验证员工是否属于指定企业
     * @param int $corpId
     * @param int $employeeId
     * @throws ApiException
     */
    private function verifyEmployeeBelongsToCorp(int $corpId, int $employeeId): void
    {
        $info = $this->corpEmployeeService->info($employeeId);
        if ($info->corp_id != $corpId) {
            throw new ApiException('员工不属于该企业');
        }
    }
} 