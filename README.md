# Install:

```
git clone <this repo> && cd
composer install
```

# Code examples:

```
# basic example
php examples/basic.php

# annotations example
php examples/annotations.php

# same, but go in reverse
php examples/annotations_reverse.php
```

# Command examples:

The command relies on the annotations being present.

```
# basic command run
vendor/dkarlovi/xezilaires/bin/xezilaires serialize products.xlsx Example\\Model\\Product

# in reverse
vendor/dkarlovi/xezilaires/bin/xezilaires serialize products.xlsx Example\\Model\\Product -r

# in XML
vendor/dkarlovi/xezilaires/bin/xezilaires serialize products.xlsx Example\\Model\\Product -f xml

# in CSV in reverse
vendor/dkarlovi/xezilaires/bin/xezilaires serialize products.xlsx Example\\Model\\Product -f csv -r  
```
