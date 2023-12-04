<?php

class ScBase
{
    /**
     * @var array Lista de objetos a serem instanciados em tempo de execução pela class
     */
    private static array $stack = [];

    /**
     * Configure um objeto com as propriedades fornecidas.
     * A classe instancia o objeto passado em tempo de execução
     * 
     * Em tempo de execução significa que você podera usar um método estático 
     *  para criar instancia do próprio objeto chamador do metodo estático
     * 
     * Ex.: MyClass::RenderHtml($params...), dessa forma os params serão usados para instanciar a classe
     * mesmo usando um método estático.
     * 
     * @param array $object O objeto a ser configurado.
     * @param array $properties As propriedades a serem definidas no objeto.
     * @return array O objeto configurado.
     */
    public static function configure(array &$object, array $properties): array
    {
        foreach ($properties as $key => $value) {
            $object[$key] = $value;
        }
        return $object;
    }

    public static function createObject(array $type, array $params): object
    {
        if (isset($type['class'])) {
            $class = $type['class'];
            unset($type);
            return static
        }
    }
}
