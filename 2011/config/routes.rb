CoGUMm::Application.routes.draw do |map|

  #get ":lang", :controller => 'site', :action => 'index'
  get "/cache", :controller => :site, :action => :cache
  post "/contact", :controller => :site, :action => :contact
  get "/:lang", :controller => :site, :action => :index
  root :to => 'site#set_initial_locale'
  
  #get "/blog", :to => "http://cogumm.net/blog/"
  get "/blog" => redirect("http://blog.cogumm.net/")
end