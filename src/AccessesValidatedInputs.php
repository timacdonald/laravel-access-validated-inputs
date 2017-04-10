<?php

namespace TiMacDonald\Http\Request;

trait AccessesValidatedInputs
{
    /**
     * Retrieve all inputs that have been validated by the rules.
     *
     * @return array
     */
    public function validatedInputs()
    {
        $keys = array_keys($this->rules());

        return $this->only($keys);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    abstract public function rules();

    /**
     * Get a subset containing the provided keys with values from the input data.
     *
     * @param  array|mixed  $keys
     * @return array
     */
    abstract public function only($keys);
}
