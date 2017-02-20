## About

### Description
The project is aimed towards simplicity, avoiding the use of any MVC frameworks or fancy libraries to focus on the application code itself with no extra clutter.

This is not intended to be production code, production code should never rewrite existing libraries and do the work of existing frameworks unless it's intended to be a core library.

### Code Structure
The application code is put in a simple structure as follows

--- bin : Application binaries and bash scripts

--- classes: Backend PHP codes and classes

--- containers: Docker containers specs and configs

--- images

--- logs

--- scripts

--- spec : PHPSpec tests

--- theme

--- views: PHP views

### The DevBox
The devbox is built using docker and docker-compose, while there is no need for docker-compose in this context, I found it to provide an ease of use for the person cloning the code and reusing it, rather than using plain docker commands which are harder to memorize and use.

The docker-compose.yml file describes the infrastructure setup of the application, the image php56-apache is the official PHP 5.6 image bundled with the latest apache server with it's default configuration.

Configuration is overrided and mounted from the containers/configs directory to php container to customize the setup.

### What's missing
- The API does not provide means of pagination
- The API does not provide means of sorting
- The API does not validate data types, for example sending minStarRating=a would still work.
- The API does not provide distance from airport