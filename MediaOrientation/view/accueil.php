<?php include "header.php"; ?>

<section class="hero-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <link rel="stylesheet" href="view/styles.css">

            <!-- Texte de bienvenue -->
            <div class="col-md-6">
                <h1 class="text-primary fw-bold mb-4">Bienvenue sur <span class="text-info">Orientation+ !</span></h1>
                <p class="lead text-secondary">
                    Découvrez les métiers, explorez vos passions, et orientez votre avenir avec confiance.
                </p>
                <p class="fw-light fst-italic">"Un site dédié à vous guider vers les meilleures opportunités pour votre futur."</p>
            </div>
            
            <div class="col-md-6 text-center">
                <img src="https://i.pinimg.com/originals/d0/c6/04/d0c60459431b6ffaecf92fc902ca996d.gif" alt="Étudiants heureux" class="hero-image img-fluid rounded shadow-lg">
            </div>
        </div>
    </div>
</section>


<section class="container my-5">
    <div class="row">
        <!-- Domaines -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <h3 class="text-primary fw-bold">Explorez les Domaines</h3>
                    <p class="text-secondary">Découvrez différents secteurs professionnels et trouvez celui qui vous inspire le plus.</p>
                    <a href="index.php?page=domaines" class="btn btn-primary">Voir les Domaines</a>
                </div>
            </div>
        </div>
        <!-- Interviews -->
        <div class="col-md-6">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <h3 class="text-info fw-bold">Interviews Inspirantes</h3>
                    <p class="text-secondary">Écoutez les témoignages et conseils des professionnels pour mieux comprendre les métiers.</p>
                    <a href="index.php?page=interview" class="btn btn-info">Voir les Métiers</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "footer.php"; ?>