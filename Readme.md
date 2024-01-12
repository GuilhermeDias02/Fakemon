Nous créons une structure API Pokedex avec les fonctionnalités de liste de Pokedex, de filtrage par génération/région, ainsi que la possibilité de connecter des dresseurs pour mettre à jour et gérer les Pokémon capturés.

1. **API de Gestion des Pokémon enregistrés :**
   - **Endpoints :**
     - `GET /api/pokema`: Récupère la liste des Pokémon du Pokedex.
     - `POST /api/pokema`: Ajoute un nouveau Pokémon au Pokedex.
     - `DELETE /api/pokema/{id}`: Supprime un Pokémon du Pokedex.

2. **Recherche dans le Porkedex:**
   - **Endpoints :**
     - Barre de recherche: filtre les pokemons affichés en fonction de leur nom.
     - Autocompletion: proposer des noms de pokemon en cours d'écriture.

3. **Boutons de filtrage :**
   - **Endpoints :**
     - Filtre Region: Filtre les Pokémons actuellement affichés par région.
     - Filtre Type: Filtre les Pokémons actuellement affichés par génération.