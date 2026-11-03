<html>
    <head>
        <title>Home </title>
    </head>    
    <body>
            <h1>Biodata Mahasiswa</h1>

        <?php
        $nim = "25170025"; // $nim merupakan variabel yang berguna untuk menyimpan data nim
        $nama = "Refan Rhizqi Gusti Wintoro" ; // $nama merupakan variabel untuk menyimpan data nama
        $status ="Aktif"; // $status merupakan variabel untuk menyimpan data status
        $semester ="2 (Dua)"; // $semester merupakan variabel untuk menyimpan data semester
        $kelas = "2A"; // $kelas merupakan variabel untuk menyimpan data kelas
        $umur = "19"; // $umur merupakan variabel untuk menyimpan data umur
        $ipk = "3.66"; // $ipk merupakan variabel untuk menyimpan data ipk

        define ("UNIVERSITAS", "Harkat Negeri");
        define ("FAKULTAS" , "Sains Dan Teknologi");
        define ("PRODI" , "S1 Teknik Informatika");
        // define adalah variabel yang tidak dapat diubah
        

        echo "NIM : ". $nim . "<br>" ;
        echo "Nama : ". $nama . "<br>" ;
        echo "Semester : ". $semester. "<br>";
        echo "Kelas : " . $kelas. "<br>";
        echo "Umur : ". $umur. "<br>";
        echo "Ipk : ". $ipk. "<br>";
        echo "Universitas : ". UNIVERSITAS . "<br>";
        echo "Fakultas : ". FAKULTAS . "<br>";
        echo "Prodi : ". PRODI . "<br";
        // echo untuk menampilkan output dibrowser
        ?>