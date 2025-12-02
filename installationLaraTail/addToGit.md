# Git Setup for Laravel + React (Vite + Tailwind) Project

*(One-file summary with comments – December 2025)*

```powershell

# 1. Initialize Git repository (you already did this)
git init
# → Creates .git folder, now your project is a Git repo

# 2. Create a proper .gitignore (CRUCIAL for Laravel + React/Vite)
#    This prevents committing node_modules, vendor, .env, build files, etc.
notepad .gitignore
#    ↓ Paste the following content (best practice 2025):

# Laravel ignores
/node_modules
/vendor
.env
.env.backup
.phpunit.result.cache
storage/*.key
/public/storage
/public/hot
/public/build
Homestead.json
Homestead.yaml

# Laravel Mix / Vite artifacts
/public/mix-manifest.json
/public/js/*
/public/css/*
vite.config.js.timestamp*

# Node / NPM / PNPM / Yarn
npm-debug.log*
yarn-debug.log*
yarn-error.log*
.pnpm-debug.log*

# IDE / OS files (optional but clean)
.idea/
.vscode/
*.swp
.DS_Store

# 3. Stage all files (except the ones ignored above)
git add .

# 4. Make the initial commit
git commit -m "Initial commit: Laravel + React (Vite + Tailwind) project"

# 5. Create a repository on GitHub (or GitLab/Bitbucket)
#    → Go to https://github.com/new
#    → Name: larareact (or your project name)
#    → DO NOT initialize with README, .gitignore or license
#    → Click "Create repository"

# 6. Link your local repo to the remote (replace YOUR-USERNAME)
git remote add origin https://github.com/YOUR-USERNAME/larareact.git
#    Or use SSH (recommended):
# git remote add origin git@github.com:YOUR-USERNAME/larareact.git

# 7. Rename default branch to main (GitHub now uses "main")
git branch -M main

# 8. Push your code to GitHub and set upstream
git push -u origin main
#    → After this, you can simply use "git push" and "git pull" in the future

# Done! Your project is now fully on GitHub
```
