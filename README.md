Pour déployer le code, connectez-vous sur Heroku, dans l'application "tidal-cpe" -> "Deploy" -> "Deploy branch"


Pour pouvoir accéder aux logs de l'application :
- Téléchargez HerokuCLI : https://devcenter.heroku.com/articles/heroku-cli
- Ouvrir un invite de commandes et saisissez la commande "heroku login". Une page Heroku va s'ouvrir vous demandant de vous connecter.
- Connectez-vous (vous n'aurez besoin de faire cette étape qu'une seule fois).
- Saisissez la commande "heroku logs --tail --app=tidal-cpe"
