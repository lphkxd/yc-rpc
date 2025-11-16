<?php

declare(strict_types=1);

namespace YC\RPC\RpcService\Admin;

interface FlowScriptAdminServiceInterface
{
    // ==================== 版本审核 ====================

    /**
     * 获取待审核版本列表
     * @param array $params [page, pageSize, keyword, review_status, agent_id, start_date, end_date]
     * @return array [list, total, statistics]
     */
    public function getReviewList(array $params = []): array;

    /**
     * 获取版本审核详情
     * @param string $versionId 版本ID
     * @return array [version, script, recordings, groups, nodes, review_logs]
     */
    public function getReviewDetail(string $versionId): array;

    /**
     * 获取版本录音列表（用于审核播放）
     * @param string $versionId 版本ID
     * @return array [recordings, statistics]
     */
    public function getVersionRecordings(string $versionId): array;

    /**
     * 审核通过
     * @param string $versionId 版本ID
     * @param int $reviewerId 审核人ID
     * @param string $remark 审核备注
     * @return array [success, message, version]
     */
    public function approveVersion(string $versionId, int $reviewerId, string $remark = ''): array;

    /**
     * 审核拒绝
     * @param string $versionId 版本ID
     * @param int $reviewerId 审核人ID
     * @param string $remark 拒绝原因（必填）
     * @return array [success, message]
     */
    public function rejectVersion(string $versionId, int $reviewerId, string $remark): array;

    /**
     * 批量审核
     * @param array $versionIds 版本ID数组
     * @param string $action approve/reject
     * @param int $reviewerId 审核人ID
     * @param string $remark 审核备注
     * @return array [success_count, fail_count, results]
     */
    public function batchReview(array $versionIds, string $action, int $reviewerId, string $remark = ''): array;

    /**
     * 获取审核统计
     * @param array $params [agent_id, start_date, end_date]
     * @return array [pending, approved, rejected, total]
     */
    public function getReviewStatistics(array $params = []): array;

    /**
     * 获取版本审核日志
     * @param string $versionId 版本ID
     * @return array [logs]
     */
    public function getReviewLogs(string $versionId): array;

    /**
     * 获取话术所有版本的审核历史
     * @param string $flowId 话术flow_id
     * @return array [versions_with_review_history]
     */
    public function getScriptReviewHistory(string $flowId): array;

    // ==================== 自动检测（预留TODO） ====================

    /**
     * 触发自动检测
     * @param string $versionId 版本ID
     * @return array [task_id, status, message]
     */
    public function triggerAutoCheck(string $versionId): array;

    /**
     * 获取自动检测结果
     * @param string $versionId 版本ID
     * @return array [status, total, checked, passed, suspicious, details]
     */
    public function getAutoCheckResult(string $versionId): array;
}
