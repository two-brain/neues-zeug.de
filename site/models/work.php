<?php

class WorkPage extends Page {
    public function getComposer () {
        foreach (site()->composers()->toStructure() as $composer) {
            if ($composer->name()->value() == $this->composer()->value()) {
                return $composer;
            }
        }
    }


    public function getEducators () {
        $educators = $this->educators()->split();

        $structure = [];

        foreach (site()->educators()->toStructure() as $person) {
            if (in_array($person->name()->value(), $educators)) {
                $structure[] = $person;
            }
        }

        return $structure;
    }
}
