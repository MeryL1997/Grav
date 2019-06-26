import BufferResource from './BufferResource';

/**
 * Resource type for DepthTexture.
 * @class
 * @extends PIXI.resources.BufferResource
 * @memberof PIXI.resources
 */
export default class DepthResource extends BufferResource
{
    /**
     * Upload the texture to the GPU.
     * @param {PIXI.Renderer} renderer Upload to the renderer
     * @param {PIXI.BaseTexture} baseTexture Reference to parent texture
     * @param {PIXI.GLTexture} glTexture glTexture
     * @returns {boolean} true is success
     */
    upload(renderer, baseTexture, glTexture)
    {
        const gl = renderer.gl;

        gl.pixelStorei(gl.UNPACK_PREMULTIPLY_ALPHA_WEBGL, baseTexture.premultiplyAlpha);

        if (glTexture.width === baseTexture.width && glTexture.height === baseTexture.height)
        {
            gl.texSubImage2D(
                baseTexture.target,
                0,
                0,
                0,
                baseTexture.width,
                baseTexture.height,
                baseTexture.format,
                baseTexture.type,
                this.data
            );
        }
        else
        {
            glTexture.width = baseTexture.width;
            glTexture.height = baseTexture.height;

            gl.texImage2D(
                baseTexture.target,
                0,
                gl.DEPTH_COMPONENT16, // Needed for depth to render properly in webgl2.0
                baseTexture.width,
                baseTexture.height,
                0,
                baseTexture.format,
                baseTexture.type,
                this.data
            );
        }

        return true;
    }
}
