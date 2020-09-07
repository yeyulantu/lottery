<?php

namespace mast;


use mast\exception\ClassNotFoundException;

class Container
{
    /**
     * 绑定标识和类的关系
     * @var array
     */
    protected $bind = [];

    /**
     * 实例对象
     * @var array
     */
    protected $instances = [];

    /**
     * 实例化类
     * @param $class
     * @param bool $newInstance
     * @return mixed|object
     * @throws ClassNotFoundException
     */
    public function make($class, $newInstance = false)
    {
        if (isset($this->instances[$class]) && !$newInstance) {
            return $this->instances[$class];
        }

        if (isset($this->bind[$class])) {
            $class = $this->bind[$class];
        }

        try {
            $reflection = new \ReflectionClass($class);
        } catch (\ReflectionException $e) {
            throw new ClassNotFoundException("class no exists:".$class);
        }

        $object = $reflection->newInstance();

        if (!$newInstance) {
            $this->instances[$class] = $object;
        }

        return $object;
    }
}