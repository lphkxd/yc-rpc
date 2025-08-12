<?php

declare(strict_types=1);

namespace YC\RPC\RpcService\Admin;

interface SmsAdminServiceInterface
{
    // ==================== 模板管理 ====================
    
    /**
     * 获取模板列表（带企业和申请人信息）
     */
    public function getTemplateList(array $params = []): array;
    
    /**
     * 获取模板详情
     */
    public function getTemplateDetail(int $templateId): array;
    
    /**
     * 审核模板（通过或拒绝）
     */
    public function auditTemplate(int $templateId, int $status, string $reason = '', ?int $auditorId = null, ?int $channelId = null): array;
    
    /**
     * 批量审核模板
     */
    public function batchAuditTemplates(array $templateIds, int $status, string $reason = '', ?int $auditorId = null): array;
    
    /**
     * 提交模板到通道审核
     */
    public function submitTemplateToProvider(int $templateId): array;
    
    /**
     * 同步模板通道状态
     */
    public function syncTemplateStatusFromProvider(int $templateId): array;
    
    // ==================== 签名管理 ====================
    
    /**
     * 获取签名列表（带企业和申请人信息）
     */
    public function getSignatureList(array $params = []): array;
    
    /**
     * 获取签名详情
     */
    public function getSignatureDetail(int $signatureId): array;
    
    /**
     * 审核签名（通过或拒绝）
     */
    public function auditSignature(int $signatureId, int $status, string $reason = '', ?int $auditorId = null, ?int $channelId = null): array;
    
    /**
     * 批量审核签名
     */
    public function batchAuditSignatures(array $signatureIds, int $status, string $reason = '', ?int $auditorId = null): array;
    
    /**
     * 提交签名到通道审核
     */
    public function submitSignatureToProvider(int $signatureId): array;
    
    /**
     * 同步签名通道状态
     */
    public function syncSignatureStatusFromProvider(): array;
    
    // ==================== 任务管理 ====================
    
    /**
     * 获取发送任务列表
     */
    public function getTaskList(array $params = []): array;
    
    /**
     * 获取任务详情
     */
    public function getTaskDetail(int $taskId): array;
    
    /**
     * 获取发送明细列表
     */
    public function getDetailList(array $params = []): array;
    
    // ==================== 统计数据 ====================
    
    /**
     * 获取审核统计数据
     */
    public function getAuditStatistics(array $params = []): array;
    
    /**
     * 获取发送统计数据
     */
    public function getSendStatistics(array $params = []): array;

    // ==================== 通道管理 ====================

    /**
     * 获取可用的短信通道列表
     */
    public function getAvailableChannels(): array;

    // ==================== 重新提审 ====================

    /**
     * 重新提审模板到通道
     */
    public function resubmitTemplateToProvider(int $templateId): array;

    /**
     * 重新提审签名到通道
     */
    public function resubmitSignatureToProvider(int $signatureId): array;
}

