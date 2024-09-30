function perguntas() {


    $nome = window.prompt("Qual seu nome?");
    $idade = window.prompt("Qual sua idade?");
    $genero = window.prompt("Qual seu genero<F/M>");

    document.writeln("<link rel='stylesheet' href='../css/style2.css'>");
    
    if ($idade < 1 ) {

        if ($genero === "M"||$genero === "m" || $genero === "F"||$genero === "f") {

            
            document.writeln("<h1>"+$nome+" ainda está para nascer no paraíso(RS)</h1>");
            document.writeln("<img src='https://aun.webhostusp.sti.usp.br/wp-content/uploads/espermatozoide-1452157.jpg'>");
            
        }else{

            document.writeln("<h1>Genero invalido</h1>");

        }

    }

    if ($idade <= 10 && $idade > 0) {

        if ($genero === "M"||$genero === "m") {
            
            document.writeln("<h1>"+$nome+" ainda é um gurizinho de "+$idade+" anos</h1>");
            document.writeln("<img src='https://i.pinimg.com/originals/bf/26/9e/bf269ec44840b53a455c39a104d5a92a.jpg'>");
            
        }else if ($genero === "F"||$genero === "f") {
            
            document.writeln("<h1>"+$nome+" ainda é uma gurizinha de "+$idade+" anos</h1>");
            document.writeln("<img src='https://storage.alboom.ninja/sites/7718/albuns/712184/img_2205.jpg?t=1600463536'");
            
        }else{

            document.writeln("<h1>Genero invalido</h1>");

        }

    }

    if ($idade <= 20  && $idade > 10 ) {

        if ($genero === "M"||$genero === "m") {
            
            document.writeln("<h1>"+$nome+" já é um gurizão jovem de "+$idade+" anos</h1>");
            document.writeln("<img src='https://i.pinimg.com/474x/c5/52/b7/c552b7c2bdfd6b8ffe43021ee0f17f9e.jpg'>");
            
        }else if ($genero === "F"||$genero === "f") {
            
            document.writeln("<h1>"+$nome+" já é uma gurizona jovem de "+$idade+" anos</h1>");
            document.writeln("<img src='https://www.mariachapeu.com.br/media/wysiwyg/Capturar_milena_rodrigues_look_ga_cho.JPG'");
            
        }else{

            document.writeln("<h1>Genero invalido</h1>");

        }

    }

    if ($idade <=40  && $idade >20 ) {

        if ($genero === "M"||$genero === "m") {
            
            document.writeln("<h1>"+$nome+" já é um gurizão adulto de "+$idade+" anos</h1>");
            document.writeln("<img src='https://images.tcdn.com.br/img/img_prod/847217/bombacha_adulto_em_oxford_2509_1_c84519ea087541f4a39dbb2620053706.jpg'>");
            
        }else if ($genero === "F"||$genero === "f") {
            
            document.writeln("<h1>"+$nome+" já é uma gurizona adulta de "+$idade+" anos</h1>");
            document.writeln("<img src='https://photos.enjoei.com.br/public/1200x1200/czM6Ly9waG90b3MuZW5qb2VpLmNvbS5ici9wcm9kdWN0cy8yODA4MTk0My8xMmI1M2YzZTAzNzA1Yjc3ODkyNzU1MTcxMWZjZTRhNi5qcGc'");
            
        }else{

            document.writeln("<h1>Genero invalido</h1>");

        }

    }

    if ($idade <=75  && $idade >40 ) {

        if ($genero === "M"||$genero === "m") {
            
            document.writeln("<h1>"+$nome+" já é um gurizão experiente de "+$idade+" anos</h1>");
            document.writeln("<img src='https://s2-g1.glbimg.com/lUQmdAkcH5vXZMLZY9LRM_xheNk=/0x0:768x1024/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2022/M/Y/w9sy77QZ2duU21A5wKBQ/professor.jpg'>");
            
        }else if ($genero === "F"||$genero === "f") {
            
            document.writeln("<h1>"+$nome+" já éuma gurizona experiente de "+$idade+" anos</h1>");
            document.writeln("<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4NYtHF0mJNcj-pj8pMYLir_vp5ramb0MIHQ&s'");
            
        }else{

            document.writeln("<h1>Genero invalido</h1>");

        }

    }

    if ($idade > 75 ) {

        if ($genero === "M"||$genero === "m") {
            
            document.writeln("<h1>"+$nome+" VOCÊ JÁ É UM HERÓI GAÚCHO de "+$idade+" anos</h1>");
            document.writeln("<img src='https://cdn.awsli.com.br/300x300/2490/2490913/produto/231309699/8-2wjfyaop3a.png'>");
            
        }else if ($genero === "F"||$genero === "f") {
            
            document.writeln("<h1>"+$nome+" VOCÊ JÁ É UMA HEROINA GAÚCHA de "+$idade+" anos</h1>");
            document.writeln("<img src='https://www.rbsdirect.com.br/filestore/1/8/9/2/2/7/4_9199f7cb264c801/4722981_cd3714a066a90e1.jpg?format=webp&h=408'");
            
        }else{

            document.writeln("<h1>Genero invalido</h1>");

        }

    }

}