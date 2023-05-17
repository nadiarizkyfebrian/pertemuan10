<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    
    <form name="latihan1" method="POST" onsubmit="return checkform(this)">

        <div>
            NIM
            <input type="text" id="txNIM" name="NIM">
        </div>
        <div>
            NAMA
            <input type="text" id="txNAMA" name="NAMA">
        </div>

        <div>
            Jenis Kelamin
            <input type="radio" id="txJKEL" name="JKEL" value="L">Laki-laki
            <input type="radio" id="txJKEL" name="JKEL" value="P">Perempuan
        </div>
        <div>
            Jurusan
            <select name="JURUSAN" id="txJUR">
                <option value="MTI">MTI</option>
                <option value="SK">SK</option>
                <option value="KAB">KAB</option>
                <option value="DKV">DKV</option>
                <option value="TIPAR">TIPAR</option>
            </select>
        </div>

        <div>
            Hobi
            <input type="checkbox" name="hobi1">Menghayal
            <input type="checkbox" name="hobi2">Rebahan
            <input type="checkbox" name="hobi3">Makan
        </div>

        <div>
            <button type="submit">Kirim Data</button>
        </div>

    </form>

    <script>
    function checkform(frm){
        let F = frm.elements;

        let nim = F.namedItem("NIM").value;
        let nama = F.namedItem("txNAMA").value;
        let jk = F.namedItem("txJKEL").value;
        let jur = F.namedItem("txJUR").value;
        let h1 = F.namedItem("hobi1").checked;
        let h2 = F.namedItem("hobi2").checked;
        let h3 = F.namedItem("hobi3").checked;

        console.log("NIM: "+nim);
        console.log("Nama: "+nama);
        console.log("Jenis kelamin: "+jk);
        console.log("Jurusan: "+jur);
        console.log("Hobi Menghayal: "+h1);
        console.log("Hobi Rebahan: "+h2);
        console.log("Hobi Makan: "+h3);
        return false;
    }
    </script>
</body>
</html>