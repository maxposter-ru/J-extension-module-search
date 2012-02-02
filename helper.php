<?php

class modMaxPosterSearchHelper
{
    /**
     * Construct
     *
     * @param  SimpleXMLElement  $form  search_form element from xml response
     */
    public function __construct(SimpleXMLElement $form)
    {
        $this->searchForm = $form;
    }


    /**
     * Convert field name into (x)HTML id form
     *
     * @param  SimpleXMLElement  $name
     * @return string
     */
    public function translate($name)
    {
        if ($name instanceof SimpleXMLElement) {
            if ($name['name']) {
                $name = $name['name'];
            }
        }
        $name = (string) $name;

        return str_replace(array('][', '[', ']'), array('_', '_', ''), $name);
    }


    /**
     * Select search_form field by name
     *
     * @param  string  $name
     * @return SimpleXMLElement | false
     */
    public function getField($name)
    {
        if (false === strpos('search', $name)) {
            if (false === strpos('[', $name)) {
                $tmp = explode('/', $name);
                $name = 'search';
                foreach ($tmp as $part) {
                    $name .= sprintf('[%s]', $part);
                }
            } else {
                $name = sprintf('search%s', $name);
            }
        }

        return current($this->searchForm->xpath('./*[@name=\'' . $name . '\']'));
    }


    /**
     * Returns field attribute
     *
     * @param  string  $field
     * @param  string  $attribute
     * @return string
     */
    public function getFieldAttribute($field, $attribute)
    {
        $attributes = $this->getField($field)->attributes();
        $attr = $attributes[$attribute];

        return $attr ? (string) $attr : false;
    }


    /**
     * Returns id form for search_form field
     *
     * @param  string  $field
     * @return string
     */
    public function getId($field)
    {
        $attr = $this->getFieldAttribute($field, 'name');

        return $this->translate($attr);
    }


    /**
     * Check field for error
     *
     * @param  string  $field
     * @return boolean
     */
    public function isError($field)
    {
        $err = $this->getFieldAttribute($field, 'error');

        return $err ? $err : false;
    }


    /**
     * ?
     *
     * @param  type  variable
     * @return void
     */
    public function getOptions($field, $addEmpty = true)
    {
        $f = $this->getField($field);
        $options = $f->xpath('./option');

        $result = '';
        if ($addEmpty) {
            $result .= '<option value=""> </option>';
        }
        foreach ($options as $option) {
            $attributes = array();
            $attrbs = clone $option->attributes();
            unset($attrbs['value']);
            foreach ($attrbs as $name => $attr) {
                $attributes[(string) $name] = (string) $attr;
            }
            $result .= sprintf('<option value="%2$s"%3$s>%1$s</option>', (string) $option, (string) $option['value'], implode(' ', $attributes));
        }

        return $result;
    }

}
