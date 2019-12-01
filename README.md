## Laravel Application

### Setup project step by step

#### Install packages, dependencies 
```
. ./install.sh
```
#### Install and configuration ESLint

Install `eslint eslint-config-airbnb` (most polular eslint config). [Full documents](https://github.com/airbnb/javascript/tree/master/packages/eslint-config-airbnb)
```
yarn add eslint eslint-config-airbnb eslint-plugin-import eslint-plugin-jsx-a11y eslint-plugin-react eslint-plugin-react-hooks
```

Otherwise, if using **npm 5+**, use this shortcut `npx`:
```
npx install-peerdeps --dev eslint-config-airbnb 
```

Finally, enable ESLint for project (**PHPStorm**)

Open `File\Settings\Languages and Frameworks` and select `Javascript\Code Quality Tools\ESLint`

Open `Settings\Editor\Inspections` and select `Javascript\Code Quality Tools\ESLint`
