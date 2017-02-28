<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Sistema gestor bibliogr&aacute;fico Minerva</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link href="resources/css/style.css" rel="stylesheet" type="text/css" media="screen" />
    </head>
    <body>
        <div id="header">
            <h1><a href="?controller=Main&action=index">Sistema gestor bibliogr&aacute;fico Minerva</a></h1>
            <h2>La mejor forma de almacenar sabidur&iacute;a</h2>
            <div id="login_area">
             
                <? include_once $this->getAppConfig()->libFolder . 'securityManager.php'; ?>
                <? if (securityManager::getCurrentUser() == null): ?>
                    <form action="?controller=Login&action=loginuser" method="POST">';
                    <input type="text" name="username" value="" size="8" class="user"/>';
                    <input type="password" name="password" value="" size="8" class="password"/>';
                    <input type="submit" value="" size="8" class="login"/>';
                    </form>;
               <? elseif (): ?>     
              
                    echo "<div style='float:right;'>";
                        echo "<a href='?controller=Users&action=perfil'>".securityManager::getCurrentUser()."<a/>"." | ".'<a href="?controller=Login&action=logout">Logout</a>';
                    echo "</div>";
                }
                ?>
            </div>
        </div>
        <div id="menu">
            <ul>
                <li class="first"><a href="?controller=Main&action=index" accesskey="1" title="">Inicio</a></li>
                <li><a href="?controller=Biblioteca&action=gestionar" accesskey="2" title="">Gestionar bibliotecas</a></li>
                <li><a href="?controller=Referencia&action=gestionar" accesskey="3" title="">Gestionar referencias</a></li>
                <li><a href="?controller=ConfReferencia&action=gestionar" accesskey="4" title="">Configurar est&aacute;ndares y referencias</a></li>
                <li><a href="?controller=Estandares&action=exportar" accesskey="5" title="">Exportar</a></li>
            </ul>
        </div>

        <div id="content" class="post">

            <?php
            if ($result['message']) {
                echo "<div id='message'>";
                echo $result['message'];
                echo "</div>";
            }
            ?>
<?php include $view_to_include; ?>
        </div>
        <div id="content_bottom"><h2></h2></div>
        <div id="footer">
            <p class="legal">&copy;2012 Todos los derechos reservados.</p>
            <p class="credit"> <a href="http://intranet.hab.uci.cu/">Facultad Regional de la UCI, "M&aacute;rtires de Artemisa"</a>.</p>
        </div>
    </body>
</html>
