<?php

class FindController extends Controller
{
    public function __construct($data = array())
    {
        parent::__construct($data);
        $this->model = new Newss();
    }

    public function show()
    {
        $this->data['tags'] = $this->model->getTagsshow();
        $this->data['category'] = $this->model->getCategoryshow();
        if (!empty($_POST)) {
            $this->data['filter'] = $this->model->getNewsByFilter($_POST);
        }
    }
}
