$(function(){
    const myAjax=new MyAjax;
    let adatok =[];
    const SZULOELEM = $("#tartalmak");
    const SABLONELEM = $(".tartalom");
    let apivegpont="/api/szakdogak";
    let akt="";

    myAjax.getAdat(apivegpont,adatok,adatokmegjelenitese);

    function adatokmegjelenitese(){
            SZULOELEM.empty();
            SABLONELEM.show();
            adatok.forEach(function(adat) {
              let ujElem = SABLONELEM.clone().appendTo(SZULOELEM);
              let ujAdat = new Szakdolgak(ujElem,adat);
            });
            SABLONELEM.hide();
    }

    $("#uj").on("click", ()=>{
        let ujSzakdoga={};
        ujSzakdoga.szakdoga_nev=$("#tnev").val();
        ujSzakdoga.githublink=$("#sor").val();
        ujSzakdoga.oldallink=$("#oszlop").val();
        ujSzakdoga.tagokneve=$("#tnev").val();
        ujSzakdoga.timestamps=$("#sor").val();
        myAjax.postAdat(apivegpont,ujSzakdoga);
        myAjax.getAdat(apivegpont,adatok,adatokmegjelenitese);
    });

    $(window).on("torles",(event)=>{
        apivegpont="/api/terem";
        myAjax.deletAdat(apivegpont,event.detail.adat.teremId,sikeresTorles,event.detail.szuloelem);
    });

   

    $(window).on("mosdositas",(event)=>{
        $("#teremid").val(event.detail.adat.teremId);
        $("#tnev").val(event.detail.adat.teremNev);
        $("#sor").val(event.detail.adat.sor);
        $("#oszlop").val(event.detail.adat.oszlop);
        $(".felvitel").css("display", "none");
        $(".modosit").css("display", "inline");

    });

    $(".modosit").on("click", ()=>{
        let mosoitottTerem={};
        mosoitottTerem.teremId=$("#teremid").val();
        mosoitottTerem.teremNev=$("#tnev").val();
        mosoitottTerem.sor=Number($("#sor").val());
        mosoitottTerem.oszlop=Number($("#oszlop").val());
        myAjax.putAdat(apivegpont,mosoitottTerem,mosoitottTerem.teremId);
        myAjax.getAdat(apivegpont,termek,termekMegjelenitese);
        $("#teremid").val('');
        $("#tnev").val('');
        $("#sor").val('');
        $("#oszlop").val('');
        $(".felvitel").css("display", "inline");
        $(".modosit").css("display", "none");

    });

    function sikeresTorles(sor){
        $(sor).remove();
    }
});