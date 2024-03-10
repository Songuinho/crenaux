<?php
if (!function_exists("navigation")) {
    function navigation(string $lien, string $title): string
    {
        $class = "link-secondary text-decoration-none";
        if ($_SERVER['SCRIPT_NAME'] === $lien) {
            $class .= ' text-primary';
        }
        return <<<HTML
    <li class = "mb-1 ">
        <a class = "$class" href="$lien" style="margin-left: 1em;">$title</a>
    </li>
HTML;
    }
}
?>
<?= navigation('index.php', 'Accueil') ?>
<?= navigation('contact.php', 'Contact') ?>

