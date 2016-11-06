# Additional exercise

m4_dnl m4_dnl -----------------------------------------------------------------------

m4_exercise([[
Create a paste-bin web-app. The app allows the user to create a new snippet and
save it (eq. write to file) via a webpage. The user can browse all snippets and
view them by clicking a link...

This app is composed out of three pages:

1. index: list all the uploaded snippets
2. upload: a form:
    - snippet name
    - contents
   Allow the user to specify a new snippet to store. Make sure:
    - no empty snippets or snippets with no name can be uploaded.
    - snippet name doesn't already exists.
3. snippet contents: show the contents of a snippet

m4_dnl m4_page()
]])
