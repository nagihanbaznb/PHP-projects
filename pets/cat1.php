<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>form</title>
    </head>
    <body>
            <form action="http://yazilimkodlama.com" method="get"  enctype="multipart/form-data">
                <table border="2">
            <tr>
                <td><label for="ad">Ad</label></td>
                <td colspan="1"><input type="text" name="ad" id="ad" required></td>
            </tr>
            
            <tr>
                <td>Soyad</td>
                <td colspan="1"><input type="text" name="soyad" id="soyad" required></td>
            </tr>
            
            <tr>
                <td>Yaş</td>
                <td><input type="number" name="yas" id="yas" min="0" max="120" placeholder="Yaşınızı girin"></td>
            </tr>
            
            <tr>
                <td>Resim Ekle</td>
                <td><input type="file" name="resim" id="resim"></td>
            </tr>
            
            <tr>
                <td>TC No</td>
                <td><input type="text" name="tc" id="tc" maxlength="11"></td>
            </tr>
            
            <tr>
                <td>Cinsiyet</td>
                <td>K<input type="radio" name="cinsiyet" id="cinsiyet" value="K" checked>
                E<input type="radio" name="cinsiyet" id="cinsiyet1" value="E"></td>
            </tr>
            
            <tr>
                <td>Yabancı Diller</td>
                <td>İngilizce<input type ="checkbox" name="dil" id="dil" checked value="ingilizce">
                    Fransızca<input type="checkbox" name="dil1" id="dil1" value="fransızca">       
                    Japonca<input type="checkbox" name="dil2" id="dil2" value="japonca">       
                           </td>
                
                <tr>
                    <td>Görüş</td>
                    <td>
                        <textarea name="gorus" id="gorus" placeholder="GÖRÜŞÜNÜZ BİZİM İÇİN ÖNEMLİ"></textarea>
                    </td>    
                </tr>
            </tr>
            
                        <tr>
            <td colspan="2">
            <input type="submit" name="kaydet" id="kaydet" value="KAYDET">
            <input type="reset" name="sil" id="sil" value="TEMİZLE">
 
            </td>
            </tr>
       
        </table>
        </form>
    </body>
</html>