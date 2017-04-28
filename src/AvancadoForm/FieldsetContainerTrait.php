<?php
namespace Ecompassaro\AvancadoForm;

trait FieldsetContainerTrait
{
    protected function generateAvancado($link, $id = 'buttonRemover')
    {
        $campoExiste = array_key_exists('avancado', $this->getElements());
    
        if ($campoExiste) {
    
            if ($this->new) {
    
                $this->remove('avancado');
            } else {
    
                $this->get('avancado')->setOption('hrefRemover', $link);
            }
        } elseif (! $this->new) {
    
            $this->add(array(
                'name' => 'avancado',
                'type' => 'Ecompassaro\AvancadoForm\Fieldset',
                'options' => array(
                    'idRemover' => $id,
                    'hrefRemover' => $link
                )
            ));
        }
    }
}
