# Bracket Checker [![Build Status](https://travis-ci.com/your-username/bracket-checker.svg?branch=master)](https://travis-ci.com/your-username/bracket-checker)

CLI utility for validating parentheses balance in arithmetic expressions.

## Installation
```bash
composer require your-username/bracket-checker
```

## Usage
```bash
php run.php "your_expression"
```

## Examples
```bash
php run.php "5*(4-2)"  # OK
php run.php "5*((4-2)" # Error
```

## Running tests
```bash
composer test
```