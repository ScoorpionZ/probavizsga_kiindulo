class Szakdolgak{
    constructor(szuloelem, adat){
        this.szuloelem=szuloelem;
        this.szakdoga_nev = this.szuloelem.children(".szakdogacime");
        this.tagokneve = this.szuloelem.children(".tagok");
         this.githublink= this.szuloelem.children(".oldallink").children(".weblink");
         console.log(this.githublink);
        this.oldallink = this.szuloelem.children(".githublink").children(".gitlink");
        
        this.adat=adat;
        this.adatokGeneralas(this.adat);
        $(this.szuloelem.find('.torles')).on("click", ()=>{
            this.torles();
        });

       $(this.szuloelem.find('.modositas')).on("click", ()=>{
           this.mosdositas();
       });
    }

    adatokGeneralas(ertekek){
        this.szakdoga_nev.html(this.adat.szakdoga_nev);
        this.githublink.attr("href",this.adat.githublink);
        this.oldallink.attr("href",this.adat.oldallink);
        this.tagokneve.html(this.adat.tagokneve);
        this.torl.attr('value',ertekek.id);
        this.mosdosit.attr('value',ertekek.id);
        
    }

  
}