<?php

declare(strict_types=1);

namespace YC\RPC\RpcService\Sms;

/**
 * 短信管理 RPC 服务接口
 */
interface SmsAdminServiceInterface
{
    /**
     * 获取短信模板列表
     */
    public function getTemplateList(array $params = []): array;

    /**
     * 获取短信模板详情
     */
    public function getTemplateDetail(int $templateId): array;

    /**
     * 审核短信模板
     */
    public function approveTemplate(int $templateId, int $status, string $reason = ''): array;

    /**
     * 获取短信签名列表
     */
    public function getSignatureList(array $params = []): array;

    /**
     * 获取短信签名详情
     */
    public function getSignatureDetail(int $signatureId): array;

    /**
     * 审核短信签名
     */
    public function approveSignature(int $signatureId, int $status, string $reason = ''): array;

    /**
     * 获取短信发送任务列表
     */
    public function getTaskList(array $params = []): array;

    /**
     * 获取短信发送任务详情
     */
    public function getTaskDetail(int $taskId): array;

    /**
     * 获取短信发送明细列表
     */
    public function getDetailList(array $params = []): array;

    /**
     * 获取短信统计数据
     */
    public function getStatistics(array $params = []): array;

    /**
     * 批量审核短信模板
     */
    public function batchApproveTemplates(array $templateIds, int $status, string $reason = ''): array;

    /**
     * 批量审核短信签名
     */
    public function batchApproveSignatures(array $signatureIds, int $status, string $reason = ''): array;
}
