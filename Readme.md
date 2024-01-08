Nous créons une structure API Pokedex avec les fonctionnalités de liste de Pokedex, de filtrage par génération/région, ainsi que la possibilité de connecter des dresseurs pour mettre à jour et gérer les Pokémon capturés.

1. **API de Gestion des Régions :**
   - **Endpoints :**
     - `GET /regions`: Récupère la liste des régions.
     - `GET /regions/{regionId}`: Récupère les détails d'une région spécifique.

2. **API de Gestion des Générations :**
   - **Endpoints :**
     - `GET /generations`: Récupère la liste des générations.
     - `GET /generations/{generationId}`: Récupère les détails d'une génération spécifique.

3. **API de Liste Pokedex avec Filtrage :**
   - **Endpoints :**
     - `GET /pokedex`: Récupère la liste complète du Pokedex.
     - `GET /pokedex?generation={generationId}&region={regionId}`: Filtre les Pokémon par génération et/ou région.

4. **API de Connexion Dresseur :**
   - **Endpoints :**
     - `POST /trainers`: Crée un nouveau dresseur.
     - `GET /trainers/{trainerId}`: Récupère les détails d'un dresseur spécifique.
     - `PUT /trainers/{trainerId}`: Met à jour les informations d'un dresseur existant.

5. **API de Gestion des Pokémon Capturés par un Dresseur :**
   - **Endpoints :**
     - `GET /trainers/{trainerId}/captured-pokemon`: Récupère la liste des Pokémon capturés par un dresseur.
     - `POST /trainers/{trainerId}/captured-pokemon`: Ajoute un nouveau Pokémon capturé au Pokedex du dresseur.
     - `DELETE /trainers/{trainerId}/captured-pokemon/{pokemonId}`: Supprime un Pokémon capturé du Pokedex du dresseur.


