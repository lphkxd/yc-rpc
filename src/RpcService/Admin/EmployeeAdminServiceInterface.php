<?php

declare(strict_types=1);

namespace YC\RPC\RpcService\Admin;

interface EmployeeAdminServiceInterface
{
    /**
     * 创建员工
     * @param int $corpId 企业ID
     * @param array $data 员工信息
     * @return array
     */
    public function create(int $corpId, array $data): array;
    
    /**
     * 更新员工信息
     * @param int $corpId 企业ID
     * @param int $employeeId 员工ID
     * @param array $data 员工信息
     * @return array
     */
    public function update(int $corpId, int $employeeId, array $data): array;
    
    /**
     * 禁用员工
     * @param int $corpId 企业ID
     * @param int $employeeId 员工ID
     * @return array
     */
    public function disable(int $corpId, int $employeeId): array;
    
    /**
     * 启用员工
     * @param int $corpId 企业ID
     * @param int $employeeId 员工ID
     * @return array
     */
    public function enable(int $corpId, int $employeeId): array;
    
    /**
     * 获取员工详情
     * @param int $corpId 企业ID
     * @param int $employeeId 员工ID
     * @return array
     */
    public function info(int $corpId, int $employeeId): array;
    
    /**
     * 获取企业下的员工列表
     * @param int $corpId 企业ID
     * @param array $filter 筛选条件
     * @return array
     */
    public function list(int $corpId, array $filter = []): array;
    
    /**
     * 员工离职处理
     * @param int $corpId 企业ID
     * @param int $employeeId 员工ID
     * @param string $reason 离职原因
     * @return array
     */
    public function resign(int $corpId, int $employeeId, string $reason = ''): array;
} 