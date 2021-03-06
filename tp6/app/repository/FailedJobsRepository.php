<?php
declare (strict_types=1);
namespace app\repository;

use app\traits\RepositoryTrait;

/**
 * 失败队列
 * Class FailedJobsRepository
 * @package app\repository
 * @author  2066362155@qq.com
 */
class FailedJobsRepository
{
    //模型，带命名空间
    public static $model = 'app\model\FailedJobs';
    //模型主键
    public static $pk = 'id';
    //name字段名称
    public static $name = '';

    use RepositoryTrait;

}
