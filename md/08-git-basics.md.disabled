---
author: Arne Soete
date: m4_timestamp
title: Git
---

# Git basics

Git is a version control system. It is designed to track and store revisions/versions of files.

This way a developer can save snapshots of the project and revert back to them
if needed. Git also enables branching of some work, this means saving the
changes in a separate store allowing the developer to test some feature and
discard or merge the changes back into the main code depending on whether
the experiment worked.

## Setup

To start tracking the contents of a directory, git must be initialised in this
directory. This is done via the m4_gitcmd(git-init) command

```bash
# Setup directory:
# mkdir /tmp/git-playground
# cd /tmp/git-playground

git init
# Initialized empty Git repository in /tmp/git-playground/.git/
```

Git tells you is initialised the git data store in a hidden `.git` folder in
the root of our project directory.

```bash
.git/
├── branches
├── config
├── description
├── HEAD
├── hooks
│   ├── applypatch-msg.sample
│   ├── commit-msg.sample
│   ├── post-update.sample
│   ├── pre-applypatch.sample
│   ├── pre-commit.sample
│   ├── prepare-commit-msg.sample
│   ├── pre-push.sample
│   ├── pre-rebase.sample
│   └── update.sample
├── info
│   └── exclude
├── objects
│   ├── info
│   └── pack
└── refs
    ├── heads
        └── tags
```

For the moment this is just a skeleton without any data e.g. we are not tracking any files. The status of our repository can always be obtained bu running the m4_gitcmd(git-status)-command:

```bash
git status
# On branch master
#
# Initial commit
#
# nothing to commit (create/copy files and use "git add" to track)
```

So we should start adding files to our git repository...

## Track files

Let us first create a file we want to track and run m4_gitcmd(git-status) again.

```bash
echo "Let's track this file..." > file.txt

git status
# On branch master
#
# Initial commit
#
# Untracked files:
#   (use "git add <file>..." to include in what will be committed)
#
#     file.txt
#
# nothing added to commit but untracked files present (use "git add" to track)
```

So git is telling us we are not tracking any files, but that an untracked file is present in our project.

To start tracking a file two actions must be performed:

* m4_gitcmd(git-add)
* m4_gitcmd(git-commit)

m4_gitcmd(git-add) will add the file to the staging area. This means group/tag
the files so future commands can operate on them.

```bash
git add file.txt
git status
# On branch master
#
# Initial commit
#
# Changes to be committed:
#   (use "git rm --cached <file>..." to unstage)
#
# 	new file:   file.txt
```

The status command tells us the file is added to the staging area and is ready for the next step: committing.

m4_gitcmd(git-commit) will take the files in the staging area and create a new
snapshot of their current contents. This commit takes a commit message: a
description of the changes to the project via the modifications of those staged
files.

```bash
git commit # a text editor will open, type your message and save + quit the file

git commit -m "start tracking file.txt" # the -m options allows us to specify the commit message on the command line

# [master (root-commit) 13ce453] start tracking file.txt
#  1 file changed, 1 insertion(+)
#  create mode 100644 file.txt
```

If we run m4_gitcmd(git-status) again, we see that all our changes are saved in
a snapshot. This is what git calls a _clean working directory_.

```bash
git status
# On branch master
# nothing to commit, working directory clean
```

### Git internals

So what actually happened when we added a file?

First of all lets have a look at the git store:

```
tree .git
.git
├── branches
├── COMMIT_EDITMSG
├── config
├── description
├── HEAD
├── hooks
│   ├── applypatch-msg.sample
│   ├── commit-msg.sample
│   ├── post-update.sample
│   ├── pre-applypatch.sample
│   ├── pre-commit.sample
│   ├── prepare-commit-msg.sample
│   ├── pre-push.sample
│   ├── pre-rebase.sample
│   └── update.sample
├── index
├── info
│   └── exclude
├── logs
│   ├── HEAD
│   └── refs
│       └── heads
│           └── master
├── objects
│   ├── 13
│   │   └── ce45372a70dba8b87d4612952d0f4c1775960b
│   ├── 3e
│   │   └── 20527aac2a95acab281585e2ec2015b7e8a77c
│   ├── 77
│   │   └── 25275230928119f8acf11ee297e559f7e4ce56
│   ├── info
│   └── pack
└── refs
    ├── heads
    │   └── master
    └── tags
```

The most important thing is the `objects` directory. In git everything is an object.

If we add a file git will create a checksum of this file. Git uses `sha-1` to
create the checksum. `sha-1` will reduce the complete contents of the file to a
40-character unique key. A slight modification to the file will result in a
completely different key.

For example:

```bash
echo "Hello World"  | sha1sum # 648a6a6ffffdaa0badb23b8baf90b6168dd16b3a
echo "Hello World." | sha1sum # b924c2f360b572e17c971f1b1b667e0732944df7
```

By adding a dot to our sentence, the hash has a completely different value...

Git stores the contents of each file committed file under the checksum name.

For example our file.txt is stored as
`.git/objects/77/25275230928119f8acf11ee297e559f7e4ce56` where
`7725275230928119f8acf11ee297e559f7e4ce56` is the checksum of this file...

The other two files are the commit message and a list of all the tracked files...

Via this checksumming, git knows which files are modified and which are not
because each change results in another checksum...

```bash
echo "Modify the file" >> file.txt
git status
# On branch master
# Changes not staged for commit:
#   (use "git add <file>..." to update what will be committed)
#   (use "git checkout -- <file>..." to discard changes in working directory)
#
# 	modified:   file.txt
#
# no changes added to commit (use "git add" and/or "git commit -a")
```

Let's commit (save) this change:

```bash
# add the file to the staging area:
git add file.txt

# save all staged files
git commit -m "modify file.txt"
# [master 1de3a69] modify file.txt
#  1 file changed, 1 insertion(+)

git status
# On branch master
# nothing to commit, working directory clean
```

### Git log

To get a list of all commits (snapshots/return points) use the m4_gitcmd(git-log)-command:

```bash
git log
# commit 1de3a699080e8df52f3f12af988152208c632b00
# Author: Arne Soete <arne.soete@irc.vib-ugent.be>
# Date:   Sun Nov 6 18:50:29 2016 +0100
#
#     modify file.txt
#
# commit 13ce45372a70dba8b87d4612952d0f4c1775960b
# Author: Arne Soete <arne.soete@irc.vib-ugent.be>
# Date:   Sun Nov 6 18:28:06 2016 +0100
#
#     start tracking file.txt
```

### Checkout a commit

Via m4_gitcmd(git-checkout) we can jump back in time to another snapshot:

```bash
git checkout 1de3a
```

<small>
m4_info([[Note that instead of typing the complete checksum, only a fraction of
the key was specified. Git is smart enough to find out which commit we meant en
checked this revision out. We just have to ensure that the provided part is
unique in the project...]])
</small>

### Git diff

m4_gitcmd(git-diff) allows to show the differences between two revisions.

```bash
git diff 13ce4 1de3a
# diff --git a/file.txt b/file.txt
# index 7725275..817f387 100644
# --- a/file.txt
# +++ b/file.txt
# @@ -1 +1,2 @@
#  Let's track this file...
# +Modify the file
```

We see that between the two commits the line `Modify the file` was added
(indicated by the `+` sign).

Is is however cumbersome to look up the hashes for a certain commit.
Fortunately git has the notion of _refs_. Refs are named commits e.q. a commit
can be addressed by a name.

For example `HEAD` always points to the last commit on the current branch.
`HEAD^` points to the second to last commit. `HEAD^^` the one before that
etc...

Thus the previous diff can be written as:

```bash
git diff HEAD^
# diff --git a/file.txt b/file.txt
# index 7725275..817f387 100644
# --- a/file.txt
# +++ b/file.txt
# @@ -1 +1,2 @@
#  Let's track this file...
# +Modify the file
```

<small>
m4_info([[If only one commit is provided, the other commit is assumed HEAD]])
</small>

## Branching and merging

### Branch

As mentioned before, git allows us to branch of you code, test some things an
merge this new code back in to the main branch or discard the changes.

By default all code lives in the _master_-branch. A new branch can be created
via m4_gitcmd(git-branch).

When no arguments are passed to m4_gitcmd(git-branch), the command will list all the available (local) branches.

```bash
git branch
# * master
```

The asterisks indicates which branch you are currently on.

If we pass git branch a name, a new branch with this name will be created:

```bash
git branch 'my-new-branch'

git branch
# * master
#   my-new-branch
```

m4_gitcmd(git-checkout) is used to switch branches:

```bash
git checkout 'my-new-branch'
# Switched to branch 'my-new-branch'

git branch
#   master
# * my-new-branch
```

Lets add a change in this branch:

```bash
echo "Add line from 'my-new-branch!'" >> file.txt

git add file.txt

git commit -m "add change from my-new-branch"
# [my-new-branch d5136c8] add change from my-new-branch
#  1 file changed, 1 insertion(+), 2 deletions(-)
```

Similar to `HEAD` before, `master` and `my-new-branch` these names are _refs_
pointing to a certain commit.

So we can also take a _diff_ between two branches:

```bash
git diff master my-new-branch
# diff --git a/file.txt b/file.txt
# index 817f387..082bfe1 100644
# --- a/file.txt
# +++ b/file.txt
# @@ -1,2 +1,3 @@
#  Let's track this file...
#  Modify the file
# +Add line from 'my-new-branch'

git diff master
# diff --git a/file.txt b/file.txt
# index 817f387..082bfe1 100644
# --- a/file.txt
# +++ b/file.txt
# @@ -1,2 +1,3 @@
#  Let's track this file...
#  Modify the file
# +Add line from 'my-new-branch'
```

<small>
m4_info([[If a second argument is omitted, HEAD is used (and HEAD in this case
is last commit on my-new-branch)]])
</small>

### Merge

If we want to include the changes we introduced in the _my-new-branch_-branch
into another branch, say _master_, we have to merge in these changes via
m4_gitcmd(git-merge).

First we have to position ourselves at the _master_-branch:

```bash
git checkout master
# Switched to branch 'master'
```

```bash
git diff my-new-branch
# diff --git a/file.txt b/file.txt
# index 082bfe1..817f387 100644
# --- a/file.txt
# +++ b/file.txt
# @@ -1,3 +1,2 @@
#  Let's track this file...
#  Modify the file
# -Add line from 'my-new-branch'
```

Via the _diff_ we notice we are missing the `Add line from my-new-branch` line.

The include these changes:

```bash
git merge my-new-branch
# Updating 1de3a69..e336094
# Fast-forward
#  file.txt | 1 +
#  1 file changed, 1 insertion(+)
```

Git tells us the merge was a success, no merge conflicts where encountered and
git was able to auto-merge the branches...

### Merge conflict

Not all merges will go as smooth as the previous example. Lets create a merge conflict.

```bash
# Create two branches
git checkout master
git branch conflicting-branch

# modify file on master
echo "Add line line from master" >> file.txt
git add file.txt
git commit -m "add line from master"

# modify file on other branch
git checkout conflicting-branch
echo "Add line line from conflicting-branch" >> file.txt
git add file.txt
git commit -m "add line from conflicting-branch"
```

Now we have a merge conflict. The same file was modified on two separate
branches en git has no way to tell which version of the file is the correct
one, or how to combine the introduced modifications...

The commit graph looks something like:

> ```
> * 42a0cbc (conflicting-branch) add line from conflicting-branch
> | * eae4aa2 (HEAD -> master) add line from master
> |/
> * e336094 add line form my-new-branch
> * 1de3a69 modify file.txt
> * 13ce453 start tracking file.txt
> ```

Lets run a merge and see what happens:

```bash
git checkout master
# Switched to branch 'master'

git merge conflicting-branch
# Auto-merging file.txt
# CONFLICT (content): Merge conflict in file.txt
# Automatic merge failed; fix conflicts and then commit the result.
```

To resolve a merge conflict via a third party application (GUI?) use m4_gitcmd(git-mergetool)

```bash
git mergetool
# Merging:
# file.txt
#
# Normal merge conflict for 'file.txt':
#   {local}: modified file
#   {remote}: modified file
# file.txt seems unchanged.
# Was the merge successful? [y/n] y
```

In my case the default merge tool is meld:

* the left pane is a branch (master)
* the middle pane is the new (to combine) file
* the right pane is the other branch (conflicting-branch)

![git-mergetool: meld](assets/img/git-mergetool.png){.img-responsive}

Once your merges are made, the files saved and the application quit, git will
ask if the merge was a success.

The merge can also be made manually by editing the file directly:

```bash
gedit file.txt
```

> ```
> Let's track this file...
> Modify the file
> Add line from 'my-new-branch'
> <<<<<<< HEAD
> Add line line from master
> =======
> Add line line from conflicting-branch
> >>>>>>> conflicting-branch
> ```

Notice the added
`<<<<<<< HEAD`,
`=======`,
`>>>>>>> conflicting-branch`
lines.

These indicators show the division between the two branches.

We are currently at the master branch, so HEAD refers to the changes made at _master_, the second line holds the changes introduced in _conflicting-branch_.

We can now modify the file, add it and commit the merge. This will resolve the merge conflict

* Modify file:

     > ```
     > Let's track this file...
     > Modify the file
     > Add line from 'my-new-branch'
     > Add line line from master
     > Add line line from conflicting-branch
     > ```
* Save changes
```bash
git add file.txt
git commit -m "merge: conflicting-branch into master"
```

Our commit graph now looks like:

> ```
> *   e5bbaef (HEAD -> master) merge: conflicting-branch into master
> |\
> | * 42a0cbc (conflicting-branch) add line from conflicting-branch
> * | eae4aa2 add line from master
> |/
> * e336094 add line form my-new-branch
> * 1de3a69 modify file.txt
> * 13ce453 start tracking file.txt
> ```

m4_info([[To create a similar graph, run: `git log --oneline --decorate --graph`]])

### Delete branch

Once a branch is merged in we can delete the branch via:

```bash
git branch -d my-new-branch
# Deleted branch my-new-branch (was e336094).
```

## Remotes

We are now able to create, merge and delete local branches, the same can be
done with remote branches.

Git is a distributed system this means we can clone, sync and push with other
repositories. These repositories can live in the same machine but in another
directory or on another computer (server).

Remote repositories can be accessed via SSH or HTTP if the remote is configured correctly.

[github.com](https://github.com) allows anyone to create remote repositories.
These can be used to collaborate with classmates or colleagues or as a remote
backup.

The only downside is that github only offers free hosting for public
repositories, so everyone can view your code...

In the following examples we will use another directory as a remote, but the
same principles apply to remoter servers.

### Clone

m4_gitcmd(git-clone) allows us to fetch a local copy of a remote repository...

```bash
git clone /tmp/git-playground /tmp/git-clone
# Cloning into '/tmp/git-clone'...
# done.

cd /tmp/git-clone
ls
# file.txt

git log
# commit e5bbaef29c5c6d3d874d0f92b9b4be72fe007dca
# Merge: eae4aa2 42a0cbc
# Author: Arne Soete <arne.soete@irc.vib-ugent.be>
# Date:   Sun Nov 6 21:51:53 2016 +0100
#
#     merge: conflicting-branch into master
#
# commit 42a0cbce88d3724603c975005488b30dcdf67141
# Author: Arne Soete <arne.soete@irc.vib-ugent.be>
# Date:   Sun Nov 6 21:31:55 2016 +0100
#
#     add line from conflicting-branch
#
# commit eae4aa2178acba0125d3c23adf77d9791a802ddf
# Author: Arne Soete <arne.soete@irc.vib-ugent.be>
# Date:   Sun Nov 6 21:31:31 2016 +0100
#
#     add line from master
#
# commit e336094c2f404534ccf47e058cbce8ef53911c15
# Author: Arne Soete <arne.soete@irc.vib-ugent.be>
# Date:   Sun Nov 6 20:41:50 2016 +0100
#
#     add line form my-new-branch
#
# commit 1de3a699080e8df52f3f12af988152208c632b00
# Author: Arne Soete <arne.soete@irc.vib-ugent.be>
# Date:   Sun Nov 6 18:50:29 2016 +0100
#
#     modify file.txt
#
# commit 13ce45372a70dba8b87d4612952d0f4c1775960b
# Author: Arne Soete <arne.soete@irc.vib-ugent.be>
# Date:   Sun Nov 6 18:28:06 2016 +0100
#
#     start tracking file.txt
```

A complete copy of the repository was fetched from the remote, we have all the history..

### Update

To update a repository to the latest version we can use m4_gitcmd(git-pull).

By default m4_gitcmd(git-pull) needs two arguments:

* the name of the remote
* the name of the branch to fetch

If a repository is cloned, by default the name of the remote is `origin`.

A list of all the remotes can be obtained via m4_gitcmd(git-remote):

```bash
git remote
# origin

git remote -v # -v -> get more info about the remote
# origin  /tmp/git-playground (fetch)
# origin  /tmp/git-playground (push)
```

Lets see a m4_gitcmd(git-pull) in action

Make some changes to original repository:

```bash
cd /tmp/git-playground
echo "add another file" > file2.txt
git add file2.txt
git commit -m "add a second file"
```

Fetch the latest changes into clone:

```bash
cd /tmp/git-clone
git pull origin master
# remote: Counting objects: 3, done.
# remote: Compressing objects: 100% (2/2), done.
# remote: Total 3 (delta 0), reused 0 (delta 0)
# Unpacking objects: 100% (3/3), done.
# From /tmp/git-playground
#  * branch            master     -> FETCH_HEAD
#    e5bbaef..b7e2e69  master     -> origin/master
# Updating e5bbaef..b7e2e69
# Fast-forward
#  file2.txt | 1 +
#  1 file changed, 1 insertion(+)
#  create mode 100644 file2.txt
```

A merge conflict can occur similar to m4_gitcmd(git-merge). The methods apply to resolve the merge conflict.

1. Modify the conflicting files via `git mergetool` or manually via the editor
1. Add en commit the changes

### Push

To submit changes back to a remote, m4_gitcmd(git-push) is used.

Similar to m4_gitcmd(git-pull), m4_gitcmd(git-push) accepts two parameters:

1. the name of the remote
1. the remote branch to push to

```bash
git push origin master
# Counting objects: 3, done.
# Delta compression using up to 8 threads.
# Compressing objects: 100% (2/2), done.
# Writing objects: 100% (3/3), 318 bytes | 0 bytes/s, done.
# Total 3 (delta 0), reused 0 (delta 0)
# To /tmp/git-playground/
#    b7e2e69..2038622  master -> master
```

m4_info([[You cannot pus to a normal _checked out_ repository. Only to bare repositories.
Create a bare repository:
```bash
git clone --bare /tmp/git-playground /tmp/git-bare
```
See m4_gitcmd(git-clone) for more info
]])
