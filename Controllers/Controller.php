<?php

namespace Controllers;

include_once __DIR__ . "/../Templates/Template.php";

use Templates\Template;

abstract class Controller
{
    /**
     * @return string
     */
    abstract protected function layout(): string;

    /**
     *
     * @return void
     */
    public function view(): void
    {
        echo $this->header() .
            $this->layout() .
            $this->footer();
    }

    /**
     *
     * @return string
     */
    protected function header(): string
    {
        return $this->template('Templates/MainLayout/header.php');
    }

    /**
     *
     * @return string
     */
    public function footer(): string
    {
        return $this->template('Templates/MainLayout/footer.php');
    }

    /**
     *
     * @param string $file_name
     * @param array|null $vars
     * @return string
     */
    public function template(string $file_name, ?array $variables = null): string
    {
        $template = new Template($file_name, $variables);

        return $template->view();
    }
}
?>