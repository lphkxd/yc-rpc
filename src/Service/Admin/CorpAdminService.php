<?php

declare(strict_types=1);

namespace YC\RPC\Service\Admin;

use Hyperf\RpcMultiplex\Constant;
use Hyperf\RpcServer\Annotation\RpcService;
use YC\Core\Exception\ApiException;
use YC\RPC\RpcService\Admin\CorpAdminServiceInterface;
use YC\Open\Service\Admin\CorpAdminService as OpenCorpAdminService;
use Hyperf\Di\Annotation\Inject;

#[RpcService(name: CorpAdminServiceInterface::class, server: "rpc", protocol: Constant::PROTOCOL_DEFAULT)]
class CorpAdminService implements CorpAdminServiceInterface
{
    #[Inject]
    protected OpenCorpAdminService $corpAdminService;

    /**
     * 开通新企业
     * @param array $data
     * @return array
     */
    public function create(array $data): array
    {
        return $this->corpAdminService->create($data);
    }

    /**
     * 更新企业信息
     * @param int $corpId
     * @param array $data
     * @return array
     */
    public function update(int $corpId, array $data): array
    {
        return $this->corpAdminService->update($corpId, $data);
    }

    /**
     * 关停企业
     * @param int $corpId
     * @param string $reason
     * @return array
     */
    public function disable(int $corpId, string $reason = ''): array
    {
        return $this->corpAdminService->disable($corpId, $reason);
    }

    /**
     * 启用企业
     * @param int $corpId
     * @return array
     */
    public function enable(int $corpId): array
    {
        return $this->corpAdminService->enable($corpId);
    }
    
    /**
     * 获取企业详情
     * @param int $corpId
     * @return array
     */
    public function info(int $corpId): array
    {
        return $this->corpAdminService->info($corpId);
    }
    
    /**
     * 检查企业编码是否可用
     * @param string $corpCode
     * @param int|null $corpId
     * @return array
     */
    public function checkCorpCode(string $corpCode, ?int $corpId = null): array
    {
        return $this->corpAdminService->checkCorpCode($corpCode, $corpId);
    }
} 