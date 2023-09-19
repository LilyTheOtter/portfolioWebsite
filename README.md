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
nano .secrets/WEBPASSWORD_FILE
```
```bash
docker compose up -d
```