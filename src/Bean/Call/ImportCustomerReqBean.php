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
}
