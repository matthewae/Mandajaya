use Closure

class ContentSecurityPolicy
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        $scp = "default-src 'self'; ";
        $scp .= "script-src 'self' 'unsafe-inline' 'unsafe-eval'; ";
        $scp .= "style-src 'self' 'unsafe-inline'; ";
        $scp .= "img-src 'self' data:; ";
        $scp .= "font-src 'self'; ";
        $scp .= "connect-src 'self'; ";
        $scp .= "frame-src 'self'; ";
        $scp .= "object-src 'none'; ";
        $scp .= "base-uri 'self'; ";
        $scp .= "form-action 'self'; ";

        $response->headers->set('Content-Security-Policy', $scp);

        return $response;
    }
}