
## Git Repositories

- [GitHub](https://github.com/hainghia/laravel-packages)
- [GitLab](https://gitlab.com/hainghia/laravel-packages)
- [Bitbucket](https://bitbucket.org/hainghia/laravel-packages)

### Remote repository

```shell
git remote -v

git remote add origin git@github.com:hainghia/laravel-packages.git
git remote add gitlab git@gitlab.com:hainghia/laravel-packages.git
git remote add bitbucket git@bitbucket.org:hainghia/laravel-packages.git

git checkout -b develop gitlab/develop

git add .; git commit -asm "Initial commit";git push origin main; git push gitlab main; git push bitbucket main
```

## Build Own Laravel Package
### Create a new Laravel project
```shell
composer create-project laravel/laravel example-app
```
```shell
mkdir packages/kukun/fibonacci/src   # Vendor/Package/src
cd packages/kukun/fibonacci

composer init
```
```shell
composer require kukun/fibonacci
```
