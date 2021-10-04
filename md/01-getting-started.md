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

```{.bash .numberLines}
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
```{.bash .numberLines}
mkdir ~/webtechnology
cd  ~/webtechnology
```

* Create your own exercises directory
```{.bash .numberLines}
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
```{.bash .numberLines}
cd ~/webtechnology
git clone https://github.com/asoete/howest-webtechnology.git cursus
```
* To get the latest version/updates
```{.bash .numberLines}
cd ~/webtechnology/cursus
git pull origin master
```
* Start a local instance of the site:
```{.bash .numberLines}
cd ~/webtechnology/cursus
make serve
```
And open <http://localhost:8000> in a web browser.

## Get local copy of the _exercises and examples_ solutions

* Get an initial copy of the repository located at <https://github.com/asoete/howest-webtechnology-examples>:

```{.bash .numberLines}
cd ~/webtechnology
git clone https://github.com/asoete/howest-webtechnology-examples.git solutions-and-examples
```
    This command will create a `solutions-and-examples`-folder which will contain all the code featured during the lessons:
    * Example snippet
    * Exercise solutions

* To get the latest version (aka. update the repository) run:
```{.bash .numberLines}
cd ~/webtechnology/solutions-and-examples
git pull origin master
```
m4_warning([[If you made local modifications to any of the files in this
repository, this update command (`git pull`) will most likely fail. So don't
modify the contents in this folder...]])
m4_dnl
m4_info([[When you do encounter errors while pulling, run:
```{.bash .numberLines}
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

## Editors


### GUI editors (present in repositories)

These editors come shipped with the default enabled package repository and are
only a `sudo dnf install...` away.

#### Gedit

This is a very basic editor equipped for basic file editing. Installed by default.

https://wiki.gnome.org/Apps/Gedit

```{.bash .numberLines}
sudo dnf install gedit

# install additional plugins for more "advanced" features linke snippets
sudo dnf install gedit-plugins
```

#### Geany

This is a very little more advanced editor equipped for simple programming.

https://www.geany.org/

```{.bash .numberLines}
sudo dnf install geany
```

Search dnf for additional plugins and install them:

```{.bash .numberLines}
sudo dnf search geany-plugins

# Example install spellcheck
sudo  dnf install geany-plugins-spellcheck
```

#### Gnome builder

Gnome builder is a full featured _Integrated Development Environment_ (IDE)
with advanced features.

https://wiki.gnome.org/Apps/Builder

https://builder.readthedocs.io/en/latest/exploring.html

```{.bash .numberLines}
sudo  dnf install gnome-builder
```

### GUI editors (third party)

Some editors are not present in the default repositories because they do not conform to the Free and Open Source policies Fedora upholds.

#### VScode / VSCodium

Microsoft publishes a very capable and popular code editor named VSCode:
https://code.visualstudio.com/

There is however no open build of this editor. This is what VSCodium is trying
to solve: https://vscodium.com/

> When we [Microsoft] build Visual Studio Code, we do exactly this. We clone the
> vscode repository, we lay down a customized product.json that has Microsoft
> specific functionality (telemetry, gallery, logo, etc.), and then produce a
> build that we release under our license.
> 
> When you clone and build from the vscode repo, none of these endpoints are
> configured in the default product.json. Therefore, you generate a “clean”
> build, without the Microsoft customizations, which is by default licensed under
> the MIT license

Installation:

```{.bash .numberLines}
sudo tee -a /etc/yum.repos.d/vscodium.repo << 'EOF'
[gitlab.com_paulcarroty_vscodium_repo]
name=gitlab.com_paulcarroty_vscodium_repo
baseurl=https://paulcarroty.gitlab.io/vscodium-deb-rpm-repo/rpms/
enabled=1
gpgcheck=1
repo_gpgcheck=1
gpgkey=https://gitlab.com/paulcarroty/vscodium-deb-rpm-repo/raw/master/pub.gpg
metadata_expire=1h
EOF
sudo dnf search codium
sudo dnf install codium.x86_64
```

### Command line editors

These are command line editors run from within a terminal. They are most
commonly used to edit configuration files and can also be used over SSH.

With some configuration they can also be used for more advanced editing and
code development.

#### ViM

This is the editor you may be seen during the lessons. It has quite a steep
learning curve. Be advised!

https://www.vim.org/

```{.bash .numberLines}
sudo dnf install vim
```

#### Nano

This editor is used during BIT01 Linux to edit config files.

https://www.nano-editor.org/

```{.bash .numberLines}
sudo dnf install nano
```

#### Emacs

http://www.gnu.org/software/emacs/

```{.bash .numberLines}
sudo dnf install emacs
```
