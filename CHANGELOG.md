# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## 0.1.0-alpha - unreleased

This is an alpha version! The changes listed here are not final.

### Added
- Added typecheck support for E2E tests.
- Adds Account Protection initialization
- Classic Theme Helper: Ensure Responsive Videos and Featured Content will load from the plugin
- Classic Theme Helper: Ensure Social Links will load from the plugin.
- Connection: Disconnecting a connection owner account will disconnect all other users first.
- Enable test coverage.
- Featured Content: Add messaging to clarify that the tag name is case sensitive.
- Initial commit.
- jetpack-components: Export the getRedirectUrl function with subpath
- Provide connection data to footer component.
- Tested up to WordPress 6.9
- Theme tools: Load theme compat functionality relevant to features in Classic Theme Helper package, from this package.

### Changed
- Admin dashboard: Disable portfolio toggle if theme supports portfolio and site is WoA
- Changed an erroneous relative import to package import.
- Code: First pass of style coding standards.
- Code: Use function-style exit() and die() with a default status code of 0.
- Custom post types: Ensure features remain available when theme support is added.
- E2E Tests: Update config file encryption algorithm.
- General: indicate compatibility with the upcoming version of WordPress - 6.6.
- General: indicate compatibility with the upcoming version of WordPress - 6.7.
- General: indicate compatibility with the upcoming version of WordPress - 6.8.
- jetpack-assets now requires jetpack-status so updating composer lock files.
- My Jetpack: Unify the user connection flow with a unified screen.
- Only include `wp-polyfill` as a script dependency when needed.
- Updated dependencies.
- Updated package dependencies.
- Update package dependencies.

### Removed
- General: Update minimum PHP version to 7.2.
- General: Update minimum WordPress version to 6.6.
- General: Update minimum WordPress version to 6.7.
- General: update WordPress version requirements to WordPress 6.5.
- Removed wp slug until plugin is approved

### Fixed
- Add autoloader check to prevent fatal errors when plugin is activated before composer install.
- E2E Tests: Only install single browser used by Playwright.
- Ensure proper flags are used with `json_encode()`.
- Jetpack: remove getIconColor functions for block icons
- JS Packages: Decrease CSS priority of global styles to prevent them from applying within the editor
- Linting: Address final rules in WordPress Stylelint config.
- Portfolios: Ensure these are enabled and working properly on themes that support portfolios
- Testimonials: fix a shortcode related bug which ccurs if the column attribute is added and set to 0
