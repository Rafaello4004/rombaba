<?php
class Page 
{
    protected $name;
    protected $template;

    public function __construct() 
    {
        $this->name = "page";
        $this->template = "<div><p>It is a default page</p></div>";
    }

    public function render()
    {
        echo $this->template;
    }
}

class BlogPage extends Page
{
    public function __construct()
    {
        $this->name = "blog";
        $this->template = '
            <h1 style="display: flex; justify-content: center;">Подкасты</h1>
            <div style="display: flex; gap: 20px; justify-content: center;">
                <div style="border: 1px solid #ccc; padding: 10px;">
                    <h3>Самые счастливые страны</h3>
                    <p>Какие страны самые счастливые?</p>
                </div>
                <div style="border: 1px solid #ccc; padding: 10px;">
                    <h3>Скрытые преимущества изучения иностранных языков</h3>
                    <p>Какие скрытые преимущества несет в себе изучение иностранных языков?</p>
                </div>
                <div style="border: 1px solid #ccc; padding: 10px;">
                    <h3>Теории заговора</h3>
                    <p>Что это такое и почему в них верят?</p>
                </div>
            </div>
        ';
    }
}
