| :warning: devcdn was available before on devcdn.herokuapp.com, however Heroku is no longer free, so devcdn <ins>will no longer be available through devcdn.herokuapp.com</ins>. We are looking for an alternative, but for now, devcdn will pause operations. Pull requests will still be reviewed, so feel free to add your library <del>when</del> <ins>if</ins> we are back online. We apologize for the inconvenience. - devcdn Developers
| ---
# devcdn
### a cdn for developers, written in php and powered by json.
devcdn is a simple yet powerful cdn to deliver all your stylesheets and script to you!
## Adding/Updating Packages
1. Create a new JSON file with your library name (e.g. `jquery.json`) in the `dat` folder
2. Add your JSON file to the catalog (`dat/catalog.json`) with the filename (e.g. `['jquery.json', 'bootstrap.json', 'yourlibrary.json']`

Look at the JSON structure for the library.json file.
```
{
    "name": "<LIBRARY NAME>",
    "currentversion": "<LATEST_VERSION>",
    "author": "<YOUR NAME>",
    "website": "https://example.com/",
    "description": "A short description of your library",
    "versions": {
        "<LATEST_VERSION>": {
            "default": "mylibrary-1.2.3.min.js",
            "slim": "mylibrary-1.2.3.slim.min.js"
        },
        "<PREVIOUS_VERSION>" :
            "default": "mylibrary-1.2.2.min.js",
            "slim": "mylibrary-1.2.2.slim.min.js"
        },
    }
}
```
3. Add the files to the `lib` folder. Name the files in the following way:
`<library_name>-<version>(.ext?)(.min?).(css|js|etc)

For example:

`jquery-3.6.1.min.js`
`jquery-3.6.1.slim.min.js`
`jquery-3.6.1.slim.js`
`jquery-3.6.1.js`

4. Make a pull request!


&copy; 2022 mrfakename. All rights reserved.
