# portfolioWebsite
Personal portfolio website of Lily Leewis
## Set secrets
```bash
cd portfolioWebsite
```
```bash
cp --no-clobber --recursive --no-target-directory .secrets.example .secrets
```
populate all secrets
```bash
nano .secrets/MYSQL_PASSWORD_FILE
```
```bash
nano .secrets/MYSQL_ROOT_PASSWORD_FILE
```
Launch the docker compose
```bash
docker compose up -d
```
## Create first user
Go to "your_domain/firstlogin" or in case of local hosting most likely "localhost/firstlogin".
Here you can create your first user.