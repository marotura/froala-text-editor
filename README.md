# About froala-text-editor
This text editor is meant to be used for laravel nova 4 and 5 by using the Froala editor.

### Important
Don't use version older then 1.0.4 because the package name was changed before this version.

## Requirements
Make sure to add the following in your .env with you froala API Key.
FROALA_ACTIVATION_KEY="your-froala-access-key"

## Installation
Use composer to import package. Command is:
composer require marotura/froala-text-editor:3.0.4

## Usage
use Marotura\FroalaTextEditor\FroalaTextEditor;

FroalaTextEditor::make('Text', 'text'),

## Options
Coming soon.

## Resources
- [Froala editor documentation](https://froala.com/wysiwyg-editor/docs/getting-started).