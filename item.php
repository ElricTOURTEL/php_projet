<?php include('header.php'); ?>
<section id="blocDescription">
        <div class="card text-white container-sm bg-transparent border-0 p-3">
            <img src="Images/image_accueil_bivouac.png" class="card-img rounded-5" alt="Image">
            <div class="card-img-overlay d-flex flex-column justify-content-center align-items-start w-100 text-wrap">
                <h1 class="card-title ps-3 display-7 display-md-3 display-lg-2">Les leaders mondiaux de la recherche de
                    bivouac</h1>
                <h2 class="card-title ps-3 display-7 display-md-3 display-lg-2">Notre appli vous permet de trouver un
                    spot idéal pour votre sortie</h2>
            </div>
        </div>
    </section>
    <div class="container mt-3">
        <h3>Notre histoire:</h3>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <p>À travers les sentiers escarpés et les forêts de pins argentés, les randonneurs
                    gravissent les hauteurs, bercés par le murmure des ruisseaux glaciaires. Le vent caresse les crêtes
                    enneigées tandis que le soleil décline derrière les sommets, peignant le ciel de teintes dorées et
                    pourpres.
                    Entre les rochers moussus et les prairies alpines, un coin de nature sauvage s’offre aux voyageurs
                    en
                    quête
                    de repos. Là, sous la voûte céleste infinie, le bivouac se dresse, modeste abri face à l’immensité
                    des
                    montagnes.
                    Autour du feu crépitant, les ombres dansent sur les toiles des tentes tandis que la nuit enveloppe
                    le
                    campement d’un silence apaisant. L’air vif transporte les senteurs de résine et d’herbes sauvages,
                    éveillant
                    un profond sentiment de liberté. Peu à peu, le sommeil gagne les esprits fatigués, bercés par le
                    souffle
                    du
                    vent et le chant lointain d’une chouette solitaire. À l’aube, les premières lueurs effleurent les
                    sommets,
                    rappelant aux aventuriers que le chemin continue, toujours plus haut, toujours plus loin.
                </p>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <h3>Notre appli:</h3>
    </div>
    <div class="container">
        <div class="row justify-content-evenly">
            <div class="col-xl-2 p-3">
                <img class="img-fluid rounded-5" alt="imagedelappli" src="Images/appli_telephone.png">
            </div>
            <div class="col-xl-2 p-3">
                <img class="img-fluid rounded-5" alt="imagedelappli" src="Images/appli_telephone.png">
            </div>
        </div>
    </div>
    <!-- SERVICE        -->
    <!-- Produit 1-->
    <div class="container mt-3">
        <h3>Nos services:</h3>
    </div>
    <div class="container mt-3">
        <div class="row g-4 d-flex flex-column flex-md-row">
            <div class="col-md-6">
                <a href="./produit3.html">
                <img class="w-100 border border-warning border-3 rounded-5" src="./Images/lieux/porteavion.jpg"
                    alt="porteavions">
                </a>
            </div>
            <div class="col-md-6 g-3 text-center">
                <h3>Le Porte-avions charles de Gaulle</h3>
                <h4 class="text-center">⭐⭐⭐⭐⭐⭐⭐</h4>
                    <h6>Notre produit phare, une nuit en bivouac sur un porte-avions, vous en avez rêvé ? Nous l'avons
                        fait,
                        venez profiter d'une nuit exceptionnelle avec un ciel étoilé au cœur de l'océan.
                    </h6>
            </div>
        </div>
    </div>
    <!-- Produit 2-->
    <div class="container mt-3">
        <div class="row g-4 d-flex flex-column flex-md-row-reverse">
            <div class="col-md-6">
                <div class="ratio ratio-4x3">
                <img class="object-fit-cover w-100 border border-warning border-3 rounded-5" src="./Images/lieux/servieres.jpg"
                    alt="porteavions">
                </div>
            </div>
            <div class="col-md-6 text-center">
                <h3>Le Lac de Servières</h3>
                <h4 class="text-center">⭐⭐⭐⭐</h4>
                <h6>Venez vous reposer au lac de Servières ou la fraicheur et la beauté du lieu vous feront oublier la fatigue en fin de journéee
                </h6>
            </div>
        </div>
    </div>
    <!-- Produit 3-->
    <div class="container mt-3">
        <div class="row g-4 d-flex flex-column flex-md-row">
            <div class="col-md-6">
                <img class="w-100 border border-warning border-3 rounded-5" src="./Images/lieux/roybon.jpeg"
                    alt="porteavions">
            </div>
            <div class="col-md-6 text-center">
                <h3>La cabane de Roybon</h3>
                <h4 class="text-center">⭐⭐⭐⭐⭐</h4>
                <h6>Après une belle randonnée, venez vous reposer dans cette belle cabane confortable la vue y est magnifique et l'air y est pur
                </h6>
            </div>
        </div>
    </div>

<?php include('footer.php'); ?>


<?php

class Item
{
    public string $name;
    public float $price;
    public string $url;
    public function __construct(string $name, float $price, string $url){
        $this->name = $name;
        $this->price = $price;
        $this->url= $url;
    }
    /*public function display():void {
        echo "<h1>Nom: ($this->name)</h1><br>";
        echo "Prix: ($this->price) euro <br><br>";
        echo "URL: <a href=\"($this->url)\">($this->url)</a><br>";
    }*/
}
$item= new Item("Canard", 50.99,"data:image/jpeg;base64,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");
/*$item->display();*/



?>