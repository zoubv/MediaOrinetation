CREATE TABLE Utilisateur (
    id_utilisateur INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    mot_de_passe VARCHAR(255) NOT NULL,
    role ENUM('eleve', 'professeur', 'admin') NOT NULL
);

CREATE TABLE Categorie (
    id_categorie INT AUTO_INCREMENT PRIMARY KEY,
    nom_categorie VARCHAR(50) NOT NULL
);

CREATE TABLE Interview (
    id_interview INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    contenu TEXT NOT NULL,
    date_publication DATE NOT NULL,
    id_utilisateur INT,
    id_categorie INT,
    FOREIGN KEY (id_utilisateur) REFERENCES Utilisateur(id_utilisateur) ON DELETE SET NULL,
    FOREIGN KEY (id_categorie) REFERENCES Categorie(id_categorie) ON DELETE SET NULL
);

CREATE TABLE Fiche_Metier (
    id_metier INT AUTO_INCREMENT PRIMARY KEY,
    nom_metier VARCHAR(100) NOT NULL,
    description TEXT,
    competences TEXT,
    etudes_recommandees TEXT,
    id_categorie INT,
    FOREIGN KEY (id_categorie) REFERENCES Categorie(id_categorie) ON DELETE SET NULL
);

CREATE TABLE Commentaire (
    id_commentaire INT AUTO_INCREMENT PRIMARY KEY,
    contenu TEXT NOT NULL,
    date_commentaire DATETIME DEFAULT CURRENT_TIMESTAMP,
    id_utilisateur INT,
    id_interview INT,
    FOREIGN KEY (id_utilisateur) REFERENCES Utilisateur(id_utilisateur) ON DELETE CASCADE,
    FOREIGN KEY (id_interview) REFERENCES Interview(id_interview) ON DELETE CASCADE
);
