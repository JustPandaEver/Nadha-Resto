var divUpdatePesanan = new Vue({
    el : '#divUpdatePesanan',
    data : {
        dataMenu : [],
        dataKategori : [],
        kategoriDipilih : ''
    },
    methods : {
        updateMenu : function()
        {
            updateMenu();
        }
    }
});

//inisialisasi 

//get data kategori
$.post('utility/getDataKategori', function(data){
    let obj = JSON.parse(data);
    let listKategori = obj.kategori;
    listKategori.forEach(renderKategori);
    function renderKategori(item, index){
        divUpdatePesanan.dataKategori.push({
            kd : listKategori[index].id,
            nama : listKategori[index].nama
        });
    }
});

function updateMenu()
{
    let kdKategori = divUpdatePesanan.kategoriDipilih;
    $.post('utility/getDataMenuKategori', {'kdKategori':kdKategori}, function(data){
        let obj = JSON.parse(data);
        let md = obj.menu;
        //clear menu 
        let pjgArray = divUpdatePesanan.dataMenu.length;
        var i;
        for(i = 0; i < pjgArray; i++){
            divUpdatePesanan.dataMenu.splice(0,1);
        }
        //update menu
        md.forEach(renderMenu);
        function renderMenu(item, index){
            divUpdatePesanan.dataMenu.push({
                kdMenu : md[index].kd_menu,
                nama : md[index].nama,
                deks : md[index].deks,
                harga : md[index].harga,
                pic : md[index].pic
            });
        }
    });
}

function setMenuKategori()
{
    divUpdatePesanan.kategoriDipilih = document.getElementById('txtKategori').value;
    divUpdatePesanan.updateMenu();
}