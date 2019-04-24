<?php
    #db
   include 'db.php';
    #cabeçalho
   include 'header.php';  
    #Conteúdo da pag.
    if(isset($_GET['pagina']))
        $pagina = $_GET['pagina'];
    else
        $pagina = 'home';
    switch($pagina){
        case 'cursos':
            include 'views/cursos.php';
            break;

        case 'alunos':
            include 'views/alunos.php';
            break;

        case 'inserir_curso':
            include 'views/inserir_curso.php';
            break;
        
        case 'inserir_aluno':
            include 'views/inserir_aluno.php';
            break;
        
        case 'matriculas':
            include 'views/matriculas.php';
            break;

        case 'inserir_matricula':
            include 'views/inserir_matricula.php';
            break;
            
        case 'update_aluno':
            include 'views/update_aluno.php';
            break;

        case 'update_curso':
            include 'views/update_curso.php';
            break;

        default:
            include 'views/home.php';
    }
    #rodapé
   include 'footer.php';  
