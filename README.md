# preview-in-playground-button-v3-example-monorepo-selective

Level 3 example of the WordPress Playground "Preview in Playground" v4 reusable workflows.

A monorepo with two plugins (`alpha`, `beta`) where each PR's preview installs **only the plugins touched by that PR**. Demonstrates the `blueprint-from-artifact: true` mode: the build script computes the diff against the base ref, generates a tailored `blueprint.json`, and the publish workflow renders it with `{{ARTIFACT_URL:<name>}}` substituted in.

## Try it

- A PR that only touches `plugins/alpha/` → preview installs Alpha only.
- A PR that touches both → preview installs both.
- A docs-only PR → preview falls back to installing both (so the button still does something).

## Files

- `plugins/alpha/` and `plugins/beta/` — the two plugins.
- `.github/workflows/pr-preview-build.yml` — always builds both zips, generates a per-PR `blueprint.json`.
- `.github/workflows/pr-preview-publish.yml` — reads that blueprint from the artifact bundle.

Both reusable workflows use `WordPress/action-wp-playground-pr-preview` at `@v4`.
Update the build and publish references together when changing versions.
The repository name retains `v3` so existing links keep working.
