require 'json'

module JavascriptBundlePath
  def javascript_bundle_path
    assets = File.read('../webpack-assets.json')
    JSON.parse(assets)['main']['js']
  end
end

include JavascriptBundlePath
