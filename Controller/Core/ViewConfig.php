<?php

/* The name of your own class that shall overload the oxarticle class.
  Best practice: yournameabbr_modulename_origclassname extends [yourclassname]_parent.
  Instantiate your new class: */

namespace sn\oxid6AreacalcModule\Model;

class ViewConfig extends ViewConfig_parent
{

    public function getSNCategoryTree()
    {
        return true;
    }

}