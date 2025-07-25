<?php

declare(strict_types=1);

namespace YC\RPC\RpcService\Admin;

interface CorpAdminServiceInterface
{
    /**
     * 开通新企业
     * @param array $data 企业信息
     * @return array
     */
    public function create(array $data): array;

    /**
     * 更新企业信息
     * @param int $corpId 企业ID
     * @param array $data 企业信息
     * @return array
     */
    public function update(int $corpId, array $data): array;

    /**
     * 关停企业
     * @param int $corpId 企业ID
     * @param string $reason 关停原因
     * @return array
     */
    public function disable(int $corpId, string $reason = ''): array;

    /**
     * 启用企业
     * @param int $corpId 企业ID
     * @return array
     */
    public function enable(int $corpId): array;
    
    /**
     * 获取企业详情
     * @param int $corpId 企业ID
     * @return array
     */
    public function info(int $corpId): array;
    
    /**
     * 检查企业编码是否可用
     * @param string $corpCode 企业编码
     * @param int|null $corpId 企业ID(编辑时使用)
     * @return array
     */
    public function checkCorpCode(string $corpCode, ?int $corpId = null): array;
} 