<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace YC\RPC\Bean\Call;

use YC\RPC\Bean\SplBean;

#[\AllowDynamicProperties]
class ImportCustomerReqBean extends SplBean
{
    /**
     * @var int 公司ID
     */
    protected int $corp_id = 0;

    /**
     * @var int 员工ID
     */
    protected int $employee_id = 0;

    /**
     * @var int 部门ID
     */
    protected int $department_id = 0;

    /**
     * @var string 文件地址
     */
    protected string $file = '';

    /**
     * @var string 任务名称
     */
    protected string $name = '';

    /**
     * @var array 导入json
     */
    protected array $json = [];

    /**
     * @var bool 是否打乱
     */
    protected bool $is_shuffle = true;

    /**
     * @var int 来源（快启-75）
     */
    protected int $source_id = 0;

    /**
     * @var int 行业
     */
    protected int $industry_id = 0;

    /**
     * @var int 任务ID
     */
    protected int $task_id = 0;

    /**
     * @var int 任务类型
     */
    protected int $task_type = 1;

    /**
     * @var bool 是否号码重复检查
     */
    protected bool $is_duplicate_check = true;

    /**
     * @var bool 是否导入CRM
     */
    protected bool $import_crm = true;

    protected string $batch_name = '';

    protected array $allocate_rule = [];

    public function __construct(?array $data = null, $autoCreateProperty = true)
    {
        parent::__construct($data, $autoCreateProperty);
    }

    public function getEmployeeId(): int
    {
        return $this->employee_id;
    }

    public function setEmployeeId(int $employee_id): void
    {
        $this->employee_id = $employee_id;
    }

    public function getDepartmentId(): int
    {
        return $this->department_id;
    }

    public function setDepartmentId(int $department_id): void
    {
        $this->department_id = $department_id;
    }

    public function getCorpId(): int
    {
        return $this->corp_id;
    }

    public function setCorpId(int $corp_id): void
    {
        $this->corp_id = $corp_id;
    }

    public function getFile(): string
    {
        return $this->file;
    }

    public function setFile(string $file): void
    {
        $this->file = $file;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getJson(): array
    {
        return $this->json;
    }

    public function setJson(array $json): void
    {
        $this->json = $json;
    }

    public function getIsShuffle(): bool
    {
        return $this->is_shuffle;
    }

    public function setIsShuffle(bool $is_shuffle): void
    {
        $this->is_shuffle = $is_shuffle;
    }

    public function getSourceId(): int
    {
        return $this->source_id;
    }

    public function setSourceId(int $source_id): void
    {
        $this->source_id = $source_id;
    }

    public function getIndustryId(): int
    {
        return $this->industry_id;
    }

    public function setIndustryId(int $industry_id): void
    {
        $this->industry_id = $industry_id;
    }

    public function getTaskId(): int
    {
        return $this->task_id;
    }

    public function setTaskId(int $task_id): void
    {
        $this->task_id = $task_id;
    }

    public function getTaskType(): int
    {
        return $this->task_type;
    }

    public function setTaskType(int $task_type): void
    {
        $this->task_type = $task_type;
    }

    public function getIsDuplicateCheck(): bool
    {
        return $this->is_duplicate_check;
    }

    public function setIsDuplicateCheck(bool $is_duplicate_check): void
    {
        $this->is_duplicate_check = $is_duplicate_check;
    }

    public function getImportCrm(): bool
    {
        return $this->import_crm;
    }

    public function setImportCrm(bool $import_crm): void
    {
        $this->import_crm = $import_crm;
    }

    public function getBatchName(): string
    {
        return $this->batch_name;
    }

    public function setBatchName(string $batch_name): void
    {
        $this->batch_name = $batch_name;
    }

    public function getBatchUsers(): array
    {
        return $this->allocate_rule;
    }

    public function setBatchUsers(array $batch_users): void
    {
        $this->allocate_rule = $batch_users;
    }

    public function getOperateType(): string
    {
        return $this->operate_type;
    }

    public function setOperateType(string $operate_type): void
    {
        $this->operate_type = $operate_type;
    }

    public function getIsSea(): bool
    {
        return $this->is_sea;
    }

    public function setIsSea(bool $is_sea): void
    {
        $this->is_sea = $is_sea;
    }
}
