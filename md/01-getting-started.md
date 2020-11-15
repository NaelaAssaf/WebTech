---
title: Getting started
---

# Getting started

This course requires some software to be installed.

* A web browser: [firefox](https://firefox.com)
* A text editor: [gedit](https://wiki.gnome.org/Apps/Gedit)
* [PHP](http://www.php.net)
* [GIT](https://www.git-scm.com)

Normally these packages are already installed on the provided VM. If not, they
can easily be installed by running:

```bash
sudo dnf install firefox gedit php git
```

Press `y` when prompted `Is this ok [y/N]:`{.text-muted}.

This document and all the exercises/examples are hosted on [GitHub](https.github.com).
This means a local copy of the source can be obtained easily **and kept in
sync with the latest changes and updates**.

This website source can be found at
<https://github.com/asoete/howest-webtechnology> and the result viewed at
<https://asoete.github.io/howest-webtechnology>

All the code created during the lessons will be made available at
<https://github.com/asoete/howest-webtechnology-examples>.

### Init workspace

*
```bash
mkdir ~/webtechnology
cd  ~/webtechnology
```

* Create your own exercises directory
```bash
mkdir exercises
```

You can store all your scripts in this folder...

## Get local copy of this site.

Although all documents are hosted online
(<https://asoete.github.io/howest-webtechnology>) **it is recommended to host the
cursus-site locally**.

Github doesn't allow the execution of PHP scripts, so the exercise solution may
not work as they should because Github is preventing PHP-code execution...

The following steps must be taken to start/open the site locally:

* Get an initial copy of the repository:
```bash
cd ~/webtechnology
git clone https://github.com/asoete/howest-webtechnology.git cursus
```
* To get the latest version/updates
```bash
cd ~/webtechnology/cursus
git pull origin master
```
* Start a local instance of the site:
```bash
cd ~/webtechnology/cursus
make serve
```
And open <http://localhost:8000> in a web browser.

## Get local copy of the _exercises and examples_ solutions

* Get an initial copy of the repository located at <https://github.com/asoete/howest-webtechnology-examples>:

```bash
cd ~/webtechnology
git clone https://github.com/asoete/howest-webtechnology-examples.git solutions-and-examples
```
    This command will create a `solutions-and-examples`-folder which will contain all the code featured during the lessons:
    * Example snippet
    * Exercise solutions

* To get the latest version (aka. update the repository) run:
```bash
cd ~/webtechnology/solutions-and-examples
git pull origin master
```
m4_warning([[If you made local modifications to any of the files in this
repository, this update command (`git pull`) will most likely fail. So don't
modify the contents in this folder...]])
m4_dnl
m4_info([[When you do encounter errors while pulling, run:
```bash
git fetch --all
git reset --hard origin/master
```
This will reset the repository to be identical to the one on GitHub. **Be
warned: local modifications will be lost...**
]])

### Final result

If you complete all of the steps above, you will end up with a workspace that looks like this:

```
~/webtechnology
├── cursus
├── exercises
└── solutions-and-examples
```
